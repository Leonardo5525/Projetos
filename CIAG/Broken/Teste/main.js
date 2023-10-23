const productList = document.getElementById('productList');
const details = document.getElementById('details');
let productsData = [];

// Função para buscar os produtos na API
async function fetchProducts() {
    try {
        const response = await fetch('https://fakestoreapi.com/products');
        productsData = await response.json();
        displayProducts(productsData);
    } catch (error) {
        console.error('Erro ao buscar produtos:', error);
    }
}

function displayProducts(products) {
    productList.innerHTML = '';
    products.forEach(product => {
        const productDiv = document.createElement('div');
        productDiv.classList.add('product');
        productDiv.innerHTML = `
            <img src="${product.image}" alt="${product.title}">
            <h2>${product.title}</h2>
            <p>Preço: $${product.price}</p>
            <p>Categoria: ${product.category}</p>
        `;
        productDiv.addEventListener('click', () => showProductDetails(product));
        productList.appendChild(productDiv);
    });
}

function showProductDetails(product) {
    details.style.display = 'block';
    details.innerHTML = `
        <h2>${product.title}</h2>
        <p>Preço: $${product.price}</p>
        <p>Categoria: ${product.category}</p>
        <p>Descrição: ${product.description}</p>
        <img src="${product.image}" alt="${product.title}">
    `;
}

function filterProducts(category) {
    if (category === 'men') category = "men's clothing";
    else if (category === 'women') category = "women's clothing"
    const filteredProducts = productsData.filter(product => category === 'all' || product.category === category);
    displayProducts(filteredProducts);
}

function sortProducts(order) {
    const sortedProducts = [...productsData];
    sortedProducts.sort((a, b) => {
        if (order === 'asc') {
            return a.price - b.price;
        } else {
            return b.price - a.price;
        }
    });
    displayProducts(sortedProducts);
}

fetchProducts();
