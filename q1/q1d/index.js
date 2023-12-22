document.querySelector('button').addEventListener('click', () => {
    function simularSaque(valorSaque) {
        const notas = [100, 50, 20, 10];
        const resultadoNotas = {};
        document.querySelector('#resultado').innerHTML = ''
    
        for (const nota of notas) {
            const qtdNotas = Math.floor(valorSaque / nota);
            if (qtdNotas > 0) {
                resultadoNotas[`R$${nota}`] = qtdNotas;
                valorSaque -= qtdNotas * nota;
            }
        }

        if (valorSaque != 0) {
            document.querySelector('#resultado').innerHTML += `Não temos nota para R$${valorSaque}<br>`;
        } else {
            document.querySelector('#resultado').innerHTML = 'Notas a serem entregues:<br>';
        }

        for (const nota in resultadoNotas) {
            document.querySelector('#resultado').innerHTML += `${nota}: ${resultadoNotas[nota]}<br>`;
        }
    }
    
    const valorSaque = document.querySelector('input').value;
    simularSaque(valorSaque);
})
