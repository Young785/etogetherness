@include('users.includes.header')
@include('users.includes.sidebar')
<link rel="stylesheet" href="/users/css/chatbox.css">
<link rel="stylesheet" href="/users/css/dashboard.css">
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
                <div class="actions d-flex col-lg-12 px-3 pt-1">
                    <div class="action">
                        <output id="result" class="d-flex overflow-auto pt-2"></output>
                    </div>
                </div>
            </div>
        </div>
        <hr class="m-2">
        <div class="chat-input">
            <form id="sendNewMessage" class="m-0 p-0 w-100 rounded-0" data-id="{{ $receiver->user_secid }}" enctype="multipart/form-data">
                <div id="message-box" class="px-1">
                    <button class="col-lg-2 btn btn-default p-0 mx-1" title="Add Files" type="button">
                        <i class="fa-solid fa-plus"></i>
                    </button>
                    <button class="col-lg-2 btn btn-default p-0 addFiles mx-1" title="Add Files" type="button">
                        <div class="image-upload">
                            <label for="file-input">
                                <i class="fas fa-image" style="cursor: pointer"></i>
                            </label>
                            <input id="file-input" style="display: none" accept="image/*"  type="file" name="file_uploaded[]" multiple />
                            </div>
                    </button>
                    <div class="col-lg-8">
                        <input type="text" id="message_text" placeholder="Type a message..." name="message" class="px-3">
                    </div>
                    <button class="col-lg-2 btn btn-default p-0 sendbtn" title="Send Message" disabled="disabled">
                        <i class="fa-solid fa-paper-plane"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" tabindex="-1" role="dialog" id="showImage">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner appendData">

                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-backdrop="false"
                    data-bs-dismiss="modal">Close</button>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('users.includes.footer')
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
        if($(this).val() == "" && $("#file-input").val() == ""){
            $(".sendbtn").attr("disabled", true)
        }else if($(this).val() == "" && $("#file-input").val() != ""){
            $(".sendbtn").attr("disabled", false)
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
                $(".sendbtn").attr("disabled", true)
                // var response = JSON.parse(result);
                if(response.status == "success"){
                    $('#result div').remove();
                    $(".chat-actions").addClass("d-none");
                    document.getElementById("sendNewMessage").reset();
                    getMessagesFunc(id)
                }else{
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
        }, 10000000);
    })
    window.onload = getMessagesFunc;

    
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
    // function readURL(input) {
    //     // document.querySelector("#file-input").addEventListener("change", (e) => {
    //         if (window.File && window.FileReader && window.FileList && window.Blob) {
    //             const files = e.target.files;
    //             const output = document.querySelector("#result");
    //             output.innerHTML = "";
    //             for (let i = 0; i < files.length; i++) {
    //                 if (!files[i].type.match("image")) continue;
    //                 const picReader = new FileReader();
    //                 picReader.addEventListener("load", function (event) {
    //                 const picFile = event.target;
    //                 const div = document.createElement("div");
    //                 div.innerHTML = `<img class="thumbnail" src="${picFile.result}" title="${picFile.name}"/>`;
    //                 output.appendChild(div);
    //                 });
    //                 picReader.readAsDataURL(files[i]);
    //             }
    //             if(!chatActions.matches(".d-none")){
    //                 $(".chat-actions").addClass("d-none");
    //             }else{
    //                 $(".chat-actions").removeClass("d-none");
    //             }
    //         } else {
    //             alert("Your browser does not support File API");
    //         }
    //     // });

    //     // if (input.files && input.files[0]) {
    //     //     var reader = new FileReader();
    //     //     reader.onload = function (e) {
    //     //         $('#img-content').attr('src', e.target.result);
    //     //         document.getElementById('img-content').style.backgroundImage="url( " + e.target.result + ")";
    //     //     }
    //     //     reader.readAsDataURL(input.files[0]);
    //     //     const chatActions = document.querySelector('.chat-actions');
            
    //     // }
    // }
    $(function () {
        $('.modal-backdrop').remove();
        $('#showImage').modal('hide');
        $(document).on("click", ".removeImg", function () {
            var parentDiv = document.getElementById("result");
            var id = $(this).data("id");
            $(".displayImage"+id).remove()
            if (!parentDiv.hasChildNodes()) {
                $(".sendbtn").attr("disabled", true)
                $('#result div').remove();
                $(".chat-actions").addClass("d-none");
            }
        })
        $("#file-input").change(function(e){
            if (window.File && window.FileReader && window.FileList && window.Blob) {
                const files = e.target.files;
                const output = document.querySelector("#result");
                output.innerHTML = "";
                for (let i = 0; i < files.length; i++) {
                    if (!files[i].type.match("image")) continue;
                    const picReader = new FileReader();
                    picReader.addEventListener("load", function (event) {
                    const picFile = event.target;
                    div = '<div class="mx-1 displayImage'+i+'" style="width: 60px;">';
                    div +=   '<img class="thumbnail" id="img-content" src="'+picFile.result+'" title="'+picFile.name+'"/>';
                    div +=    '<span class="removeImg" data-id="'+i+'"><i class="fa fa-times"></i></span>';
                    div +='</div>';
                    $(output).append(div);
                    });

                    picReader.readAsDataURL(files[i]);
                }
                const chatActions = document.querySelector('.chat-actions');
                // if(!chatActions.matches(".d-none")){
                //     $(".chat-actions").addClass("d-none");
                // }else{
                    $(".chat-actions").removeClass("d-none");
                    $(".sendbtn").attr("disabled", false)
                // }
            } else {
                alert("Your browser does not support File API");
            }
        });
    })
    $(document).on("click", ".showMoreimages", function(){
        var id = $(this).data("id");
        $.ajax({
        url: '/user/messages/get-images/'+id,
        method: "GET",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        // data: image,
        success: function(response) {
            $('#showImage').modal('show');
            $(".appendData").html(response)
        }
        });
    })
    $('.modal').on('om.bs.modal', function () {
        if ($(this).is(':visible')) {
        console.log("show modal")
        $('.modal-backdrop').show();
        }else{
            console.log("hidden modal");
            $('.modal-backdrop').remove();
        }
    })
</script>