// document.getElementById('download-button').addEventListener('click', htt()); 

// $(document).ready(function () {
//     var xhr = new XMLHttpRequest;
//     $('#download-button').click(function () {
//         console.log('LOADED', xhr);     
//         xhr.onload = function() {
//             console.log('LOADED', xhr.responseText);
//             if (xhr.status === 200) {
//                 console.log('XMLHttrequest is working');
//                 responseObject = JSON.parse(xhr.responseText);
//                 console.log(this.responseText);
//             }
//             for (var i = 0 ; i < responseObject.events.length; i++) {
//                 newContent += '<div class="root">';
//                 newContent += '<p>';
//                 + responseObject.events[i].location + responseObject.events[i].date
//                 newContent += '</p>';
//                 newContent += '</div>';
//             }
//         }
//         xhr.open('GET', 'index2.php', true);
//         xhr.send();

//         $.post('index2.php', 'matricula = 2011');
//     });
// });
/*




*/

// document.getElementById('download-button').addEventListener('click', htt);

// function htt(){
//     var xhr = new XMLHttpRequest;
//     console.log('Clicked');
    

//     xhr.onload = function() {
//         console.log('LOADED', xhr.responseText);
//         if (xhr.status === 200) {
//             console.log('XMLHttrequest is working');
//             console.log(this.responseText);
//             var responseObject = JSON.parse(this.responseText);
//         }
//         // var newContent = '';
//         // for (var i = 0 ; i < responseObject.events.length; i++) {
//         //     newContent += '<div class="event">';
//         //     newContent += '<p>';
//         //     + responseObject.events[i].location + responseObject.events[i].date
//         //     newContent += '</p>';
//         //     newContent += '</div>';
//         // }
//         document.getElementById('root').innerHTML = JSON.parse(this.responseText);
//     }

   
  
//     xhr.open('GET', 'index2.php?matricula=1', true);
//     xhr.send();
// };




// document.getElementById('download-button').addEventListener('click'); 

    $(document).ready(function() {
        $("#download-button").click(function(){
            $("#root").load('index2.php?matricula=1?mes=abril', function(){
               
            });
        }); 
    });

 