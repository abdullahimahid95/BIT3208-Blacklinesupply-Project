function addProduct() {
    const list = document.getElementById("productList");
    const newItem = document.createElement("li");
    newItem.textContent = "New Product — Ksh 999";
    list.appendChild(newItem);
    document.getElementById("message").textContent = "Product added successfully!";
}

function changeProduct() {
    const firstItem = document.getElementById("item1");
    firstItem.textContent = "Product X — SALE Ksh 400";
    firstItem.style.color = "#27AE60";
    document.getElementById("message").textContent = "Product updated successfully!";
}

function removeProduct() {
    const list = document.getElementById("productList");
    const lastItem = list.lastElementChild;
    list.removeChild(lastItem);
    document.getElementById("message").textContent = "Product removed successfully!";
}
