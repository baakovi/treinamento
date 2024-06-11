function abrirMenu(){
    document.getElementById('btnMenu').style.width = '250px';
};

function fecharMenu(){
    document.getElementById('btnMenu').style.width = '0px';
}

function reloadPage(){
    window.location.assign('index.html');
}

document.getElementById('form-get').addEventListener('submit', (e) => {
    let age = document.querySelector('[name="age"]').value;
    let gender = document.querySelector('[name="gender"]').value;
    let meters = document.querySelector('[name="meters"]').value;

    fetch(`function/loop.process.php?age=${age}&gender=${gender}&meters=${meters}`)
    .then(response => response.json())
    .then(result => {
        // document.getElementById('displayresult').value = result.resultVO2;
        document.getElementById('result').innerHTML = `<input placeholder='VO₂ Máx ${result.resultVO2}" mL.kg.min-1' name="result" readonly>`;
        document.getElementById('result-input').innerHTML = result.resultRend;
        document.getElementById('result-input').style.color = result.resultRend;
    })

    .catch(error => {
        alert(error);
    });
    e.preventDefault();
});