function updatePrijs() {
    const productSelect = document.getElementById('product');
    const aantalInput = document.getElementById('aantal');
    const productNaam = document.getElementById('product-naam');
    const productPrijs = document.getElementById('product-prijs');
    const totaalPrijs = document.getElementById('totaal-prijs');

    const productPrijsPerStuk = getProductPrijs(productSelect.value);
    const aantal = parseInt(aantalInput.value, 10);

    productNaam.textContent = productSelect.options[productSelect.selectedIndex].text;
    productPrijs.textContent = `€${productPrijsPerStuk.toFixed(2)}`;
    totaalPrijs.textContent = `€${(productPrijsPerStuk * aantal).toFixed(2)}`;
  }

  function getProductPrijs(product) {
    switch (product) {
      case 'rode_wijn':
        return 10.00;
      case 'witte_wijn':
        return 12.50;
      case 'rose_wijn':
        return 11.00;
      case 'champagne':
        return 21.00;
      default:
        return 0.00;
    }
  }
  window.onload = updatePrijs;