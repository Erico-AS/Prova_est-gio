document.querySelector('button').addEventListener('click', () => {
    function contarCaracteres(inputString) {
        const charCount = {};
    
        for (const char of inputString) {
            if (charCount[char]) {
                charCount[char]++;
            } else {
                charCount[char] = 1;
            }
        }

        console.log(charCount)
        for (const char in charCount) {
            document.getElementById('resultado').innerHTML += `${char}: ${charCount[char]}<br>`;
        }
    
    }
    
    const inputString = document.querySelector('input').value;
    document.getElementById('resultado').textContent = ''
    contarCaracteres(inputString);
    
})