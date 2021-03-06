function showUsersNameAndWeight()
{
    let usersDiv = document.querySelector('#users');
    usersDiv.innerHTML = '';

    let username = window.location.href.split('?username=')[1];

    let url = '../../model/php/get-all-users-weights.php';

    if (username) {url += ('?username=' + decodeURI(username));}

    fetch(url)
    .then((result) =>
    {
        return result.json();
    })
    .then((result) =>
    {
        result.forEach((arr) =>
        {
            usersDiv.insertAdjacentHTML('beforeEnd', 
            `
            <a href="index.php?username=${arr.username}" class="user">
                <p>${arr.username}</p>
                <p>Вес: ${arr.weight}</p>
            </a>
            `)
        });
    });
}

function findAndShowWeightInfo()
{

    let username = window.location.href.split('?username=')[1];

    let url = '../../model/php/get-user-info.php';
    
    if (username) {url += ('?username=' + decodeURI(username));}
    
    fetch(url)
    .then((result) =>
    {
        return result.json();
    })
    .then((weights) =>
    {
        let weightInfo = [];
    
        weights.forEach((arr) =>
        {
            weightInfo.push({'y': arr.weight, 'label': arr.date});
        });
        
        let graph = new CanvasJS.Chart("graph", {
            title: {
                text: "График веса"
            },
            axisY: {
                title: "Вес"
            },
            data: [{
                type: "line",
                dataPoints: weightInfo
            }]
        });
        graph.render();
    });
}

function inputCheck(event)
{
    if (event.target.value[event.target.value.length - 1] != '.')
    {
        event.target.value = Math.abs(parseFloat(event.target.value));
        if (event.target.value == 'NaN') event.target.value = '';
    }
}

showUsersNameAndWeight();
findAndShowWeightInfo();

document.querySelector('#push-new-weight input[name=weight]').addEventListener('input', inputCheck);