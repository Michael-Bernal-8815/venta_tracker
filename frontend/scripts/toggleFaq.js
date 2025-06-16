window.toggleFAQ = function(element) {
    const allFaqs = document.querySelectorAll('.faq-answer');
    const allQuestions = document.querySelectorAll('.faq-question');

    allFaqs.forEach(faq => {
        faq.style.display = 'none';
    });

    allQuestions.forEach(question => {
        question.classList.remove('active');
    });

    const answer = element.nextElementSibling;
    if (answer.style.display === 'block') {
        answer.style.display = 'none';
        element.classList.remove('active');
    } else {
        answer.style.display = 'block';
        element.classList.add('active');
    }
};
