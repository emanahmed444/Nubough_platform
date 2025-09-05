// Floating Labels JavaScript
document.addEventListener('DOMContentLoaded', function() {
    const floatingInputs = document.querySelectorAll('.floating-input');
    
    floatingInputs.forEach(input => {
        // Handle input events
        input.addEventListener('input', function() {
            if (this.value.length > 0) {
                this.setAttribute('data-filled', 'true');
            } else {
                this.removeAttribute('data-filled');
            }
        });
        
        // Handle focus events
        input.addEventListener('focus', function() {
            this.setAttribute('data-focused', 'true');
        });
        
        // Handle blur events
        input.addEventListener('blur', function() {
            this.removeAttribute('data-focused');
        });
        
        // Check initial state
        if (input.value.length > 0) {
            input.setAttribute('data-filled', 'true');
        }
    });
});
