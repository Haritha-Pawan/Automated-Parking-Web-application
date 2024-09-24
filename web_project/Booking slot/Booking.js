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

