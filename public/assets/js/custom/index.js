document.querySelectorAll('.hoverClickLink').forEach(function(element) {
    element.addEventListener('click', function(event) {
        // Prevent the default behavior
        event.preventDefault();
        // Redirect to the specified URL
        window.location.href = this.href;
    });
});
