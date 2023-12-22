document.querySelector('button').addEventListener('click', () => {
    const numeros = document.getElementById('lista').value.split(',').map(Number);
    const listaOrdenada = numeros.sort((a, b) => a - b);
    console.log(listaOrdenada)
    document.getElementById('resultado').textContent = listaOrdenada.toString();
});
