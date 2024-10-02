// Add event listeners to boxes
document.querySelectorAll('.box').forEach(box => {
    box.addEventListener('click', function() {
        // Get the box value
        let value = this.getAttribute('id');
       
        
        // Display the popup
        let popup = document.getElementById('form');
       
        popup.style.display = 'block';

       
    });
});

// set slot address in Booking confirm forme 
document.querySelectorAll('.box').forEach(box => {
    box.addEventListener('click', function() {
        // Get the box value
        let value = this.getAttribute('id');
       document.getElementById('slotnum').textContent=value;
        
       

       
    });
})


function calcu(){
    const intime = document.getElementById('intime').value;
    const outtime = document.getElementById('outtime').value;
    
    
      let start = new Date(intime);
      let end = new Date(outtime);
    
      let milisecond_time = (end-start);
      let hours =Math.floor( milisecond_time / (1000*60*60));
    
      
    
       const perHour = 50.00;
    
       let total= perHour*hours;

       if(total<0){
        window.alert ("Incorrect Date , please Enter ");
       }
    
       document.getElementById('total').innerHTML=total.toFixed(2);
    
    
      
    
    }


    const colorBox = document.getElementsByClassName('box');
    const confirmbtn = document.getElementById('confirm');

    confirmbtn.addEventListener('click',function(){
             colorBox.classList.add('red-box');
             confirmbtn.disabled = true;
    });

    