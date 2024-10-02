
const faq = document.querySelectorAll('.faq');


faq.forEach((faq) => {
    const icon = faq.querySelector('.image');
    const answer = faq.querySelector('.pannel');

    
    icon.addEventListener('click', () => {
       
        if (answer.style.display === 'block') {
            answer.style.display = 'none';
            
        } else {
            answer.style.display = 'block';
         
        }
    });
});
