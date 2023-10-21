const productList = document.getElementById('productList');
const details = document.getElementById('details');
const container = document.getElementById('container');
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
        productList.appendChild(productDiv);
        productDiv.addEventListener('click', () => showProductDetails(product));
    });
}


function showProductDetails(product) {
    productList.style.display = 'none';
    details.style.display = 'block';
    container.style.display = 'none';

    const backButton = document.getElementById('backButton');
    const titleContainer = document.getElementById('title');
    const priveContainer = document.getElementById('price');
    const categoryContainer = document.getElementById('category');
    const descriptionContainer = document.getElementById('description');
    const rateContainer = document.getElementById('rate');
    const countContainer = document.getElementById('count');
    const image = document.getElementById('image');

    backButton.addEventListener('click', () => {
        productList.style.display = 'grid';
        details.style.display = 'none';
        container.style.display = 'block';
    })
    
    titleContainer.innerText = product.title;
    priveContainer.innerText = product.price;
    categoryContainer.innerText = product.category;
    descriptionContainer.innerText = product.description;
    rateContainer.innerText = product.rating.rate;
    countContainer.innerText = product.rating.count;



    image.src = product.image;
    image.alt = product.title;
}

function filterProducts(category) {
    if(category === 'men') category = "men's clothing";
    else if (category === 'women') category = "women's clothing";
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

const searchBar = document.getElementById('searchbar');
searchBar.addEventListener('input', () => {
    const filteredProducts = productsData.filter(
        product => product.title.toLowerCase().includes(searchBar.value.toLowerCase())
    );
    displayProducts(filteredProducts);
});

fetchProducts();
