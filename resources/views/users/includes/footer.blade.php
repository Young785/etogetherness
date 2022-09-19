    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
	<script src="/assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
    <script>
        $(document).ready(function(){
            getMessagesFunc();
            setInterval(function () {
                getMessagesFunc()
            }, 5000);
        })
        // window.onload = getMessagesFunc;

        
        function getMessagesFunc()
            {
                var url = (window.location).href;
                var id = url.split('/').pop();
            console.log(id)
            $.ajax({
            url: '/user/message/'+id,
            method: "GET",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            // data: image,
            success: function(response) {
                $('.voldemort').html(response)
            }
            });
        }
        
        var el = document.getElementById("wrapper")
        var toggleButton = document.getElementById("menu-toggle")

        toggleButton.onclick = function (){
            el.classList.toggle("toggled")
        }
    </script>
</body>
</html>