let table = document.querySelector('table');
let request = new XMLHttpRequest();
request.open('GET' , 'http://localhost/phptasks/tasks8-9/read.php');
request.send()
request.addEventListener('load' , function(){
    let data = JSON.parse(request.responseText);
    console.log(data);
    data.forEach(function(e , index) {
        table.innerHTML += 
        `
        
        <tr>
        <td>${data[index].id}</td>
        <td>${data[index].name}</td>
        <td>${data[index].address}</td>
        <td>${data[index].salary}</td>
        <tr>
   
        `   
    });
        
 
        
})