@include('users.includes.header')
<link rel="stylesheet" href="/users/css/chatbox.css">
<link rel="stylesheet" href="/users/css/dashboard.css">
{{-- <div id="div">
    <h1>@{{ message }}</h1>
</div> --}}

<div class="container">
    <div class="chatbox">
        <div class="bar">
            <div class="positioning-container-bar">
                <div class="status"></div>
                <div class="name">{{ substr($receiver->name, 0, 30).'...' }}</div>
            
                <div class="icon-container">
                    <div class="icon">
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="icon">
                        <i class="fas fa-video"></i>
                    </div>
                    <div class="icon">
                        <i class="fas fa-cog"></i>
                    </div>
                    {{-- <div class="icon">
                        <i class="fas fa-times"></i>
                    </div> --}}
                </div>
            </div>
        </div>
        <div class="chat-history">
            <div class="middle pt-1">
                <div class="voldemort">
                </div>
            </div>
        </div>
        <div class="chat-actions d-none">
            <div class="positioning-container-chat-actions">
                <div class="actions d-flex col-lg-12 px-3 pt-2">
                    <div class="action">
                        <i class="fas fa-image"></i>
                    </div>
                    <div class="action">
                        <i class="fas fa-stop"></i>
                    </div>
                    <div class="action">
                        <i class="fas fa-grin"></i>
                    </div>
                    <div class="action">
                        <i class="fas fa-camera"></i>
                    </div>
                </div>
            </div>
        </div>
        <hr class="m-2">
        <div class="chat-input">
            <form id="sendNewMessage" class="m-0 p-0 w-100 rounded-0" data-id="{{ $receiver->user_secid }}">
                <div id="message-box" class="px-1">
                    <button class="col-lg-2 btn btn-default p-0 addFiles" title="Add Files" type="button">
                        <i class="fa-solid fa-plus"></i>
                    </button>
                    <div class="col-lg-8">
                        <input type="text" id="message_text" placeholder="Type a message..." name="message" class="px-3" style="">
                    </div>
                    <button class="col-lg-2 btn btn-default p-0 sendbtn" title="Send Message" disabled="disabled">
                        <i class="fa-solid fa-paper-plane"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@include('users.includes.footer')
<script src="https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.js"></script>
 
{{-- <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script> --}}
{{-- <script>
    const { createApp } = Vue

    createApp({
        data() {
            return {
            message: 'Hello Vue!'
            }
        }
    }).mount('#app')

    // new Vue({
    //     el: "#app",
    //     data: {
    //         message: "Hello World";
    //     }
    // });

     $(".person").on('click', function(){
    $(this).toggleClass('focus').siblings().removeClass('focus');
 })
</script> --}}

<script>
    $(".addFiles").click(function () {
        const chatActions = document.querySelector('.chat-actions');
        if(!chatActions.matches(".d-none")){
            $(".chat-actions").addClass("d-none");
        }else{
            $(".chat-actions").removeClass("d-none");
        }
    });
    $("#message_text").keyup(function () {
        if($(this).val() == ""){
            $(".sendbtn").attr("disabled", true)
        }else{
            $(".sendbtn").attr("disabled", false)
        }
    });
    $("#sendNewMessage").submit(function (e) {
        e.preventDefault();
        var inputs = new FormData(this);
        var id = $(this).data("id");
        var form = $(this);
        $.ajax({
            url: '/user/message/'+id,
            method: "POST", 
            cache: false,
            contentType: false,
            processData: false,
            async: false,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: inputs,
            success: function(response) {
                // var response = JSON.parse(result);
                if(response.status == "success"){
                    $(".sendbtn").attr("disabled", true)
                    document.getElementById("sendNewMessage").reset();
                    getMessagesFunc(id)
                }else{
                    $(".sendbtn").attr("disabled", true)
                    toastr.options.timeOut = 10000;
                    toastr.error(response.message);
                }
            }
        });
    });
    
    function getMessageFunc(id)
    {
        $.ajax({
        url: '/user/get-messages',
        method: "GET",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        // data: image,
        success: function(response) {
            getMessagesFunc(id)
        }
        });
    }
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
        
</script>