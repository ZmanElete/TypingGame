var scores = JSON.parse(localStorage.getItem('scores'));
var endOfList = document.getElementById('end-of-list');

scores.forEach((score) => {
    newElement(score);
});

function newElement(score){
    var newRow = document.createElement("tr");
    newRow.innerHTML = "<td>"+score[0]+"</td><td>"+score[1]+"</td>";

    document.getElementById('table-body').insertBefore(newRow, endOfList);
}
