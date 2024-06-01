<footer class="sticky-bottom bg-dark text-light bg">
<div class="container-fluid p-3 pt-3 fot">
<p>@Candle<br>2024-2025</p>
<a href="../catalog/index.php" class="text-white">Каталог</a>
</div>
</footer>
</main>
<!-- <script src="/assets/bootstrap/js/bootstrap.bundle.js"></script> -->

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
'use strict'
// Fetch all the forms we want to apply custom Bootstrap validation styles to
const forms = document.querySelectorAll('.needs-validation')
// Loop over them and prevent submission
Array.from(forms).forEach(form => {
form.addEventListener('submit', event => {
if (!form.checkValidity()) {
event.preventDefault()
event.stopPropagation()
}
form.classList.add('was-validated')
}, false)
})
})()
</script>

</body>
</html>
