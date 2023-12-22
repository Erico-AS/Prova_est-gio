document.querySelector('button').addEventListener('click', () => {
    function calcularMediaPonderada(nota1, nota2, nota3) {
        const peso1 = 2, peso2 = 3, peso3 = 5; 
        const mediaPonderada = (nota1 * peso1 + nota2 * peso2 + nota3 * peso3) / (peso1 + peso2 + peso3);
        return mediaPonderada;
    }
    
    const nota1 = document.getElementById('nt-1').value ? parseFloat(document.getElementById('nt-1').value) : 0;
    const nota2 = document.getElementById('nt-2').value ? parseFloat(document.getElementById('nt-2').value) : 0;
    const nota3 = document.getElementById('nt-3').value ? parseFloat(document.getElementById('nt-3').value) : 0;
    
    const mediaFinal = calcularMediaPonderada(nota1, nota2, nota3);
    document.getElementById('resultado').textContent = `A média final é: ${mediaFinal.toFixed(2)}`;
});

