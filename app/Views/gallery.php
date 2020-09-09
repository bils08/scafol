<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="The small framework with powerful features">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
    
    <link rel="stylesheet" type="text/css" href="upload_style.css">
    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript" src="upload_script.js"></script>

    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

	<!-- STYLES -->

	<style {csp-style-nonce}>
		.container{
            
        }
        .row1{
            margin-left: 150px;
        }
        .row2{
            margin-left: 20px;
        }
        .row3{
            margin-top: 70px;
        }
        .row{
            margin-top: 20px;
        }
        .btn{
            margin-top: 50px;
        }
        .btn-white{
            color: white;
        }
        .btn-black{
            color: black;
        }
        .img{
            width: 150px;
            height: 150px;
        }
        h6 span{
            font-weight: lighter;
        }
        .vl {
            margin-top: 10px;
            border-left: 1px solid black;
            height: 560px;
        }
        textarea{
            background-color: grey;
        }

        #wrapper
        {
            text-align:center;
            margin:0 auto;
            padding:0px;
            width:995px;
        }
        #drop-area
        {
            margin-top:30px;
            text-align:center;
            margin-left:20px;
            width:400px;
            height:400px;
            background-color:lightgrey;
        }
        .drop-text
        {
            margin-top:20px;
            color:grey;
            font-size:25px;
            font-weight:bold;
        }
        #drop-area img
        {
            max-width:200px;
        }
	</style>
</head>
<body>

<!-- CONTENT -->
<!-- Container -->
<div class="container">
<!-- NAVBAR -->
    <div class="row row1">
        <div class="col">
            <button type="button" class="btn btn-warning btn-white btn-md" data-toggle="modal" data-target="#modalTambah">Tambah</button>
        </div>
        <div class="col">
            <button type="button" class="btn btn-success btn-white btn-md">Foto</button>
            <button type="button" class="btn btn-light btn-black btn-md" style="margin-left: 20px">Video</button>
            <button type="button" class="btn btn-light btn-black btn-md" style="margin-left: 50px">Filter By</button>
        </div>
    </div>
<!-- NAVBAR -->
<!-- Tag -->
    <div class="row row2">
        <div class="col-sm"></div>
        <div class="col-sm">
            <button type="button" class="btn btn-success btn-sm">All</button>
            <button type="button" class="btn btn-light btn-sm">Jalant tol</button>
            <button type="button" class="btn btn-light btn-sm">Jembatan</button>
            <button type="button" class="btn btn-light btn-sm">Underpass</button>
        </div>
        <div class="col-sm"></div>
    </div>
<!-- Tag -->
<!-- Gallery -->
    <div class="row row3">
        <div class="row" id="row1">
            <div class="col-md">
                <img src="https://images.unsplash.com/photo-1558691518-331f8672f840?ixlib=rb-1.2.1&auto=format&fit=crop&w=689&q=80" width="250" height="250" data-toggle="modal" data-target="#modal"/>
                <h6 style="text-align:left;margin-top:8px;">
                    Pak Budi
                    <span style="float:right;">
                        5 Day Ago
                    </span>
                </h6>
            </div>
            <div class="col-md">
                <img src="https://images.unsplash.com/photo-1487491424367-7571f9afbb30?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80" width="250" height="250" data-toggle="modal" data-target="#modal"/>
                <h6 style="text-align:left;margin-top:8px;">
                    Pak Budi
                    <span style="float:right;">
                        5 Day Ago
                    </span>
                </h6>
            </div>
            <div class="col-md">
                <img src="https://images.unsplash.com/photo-1566350321650-83c2b8e587a9?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" width="250" height="250" data-toggle="modal" data-target="#modal"/>
                <h6 style="text-align:left;margin-top:8px;">
                    Pak Budi
                    <span style="float:right;">
                        5 Day Ago
                    </span>
                </h6>
            </div>
            <div class="col-md">
                <img src="https://images.unsplash.com/photo-1565942314814-d647a9a5338b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80" width="250" height="250" data-toggle="modal" data-target="#modal"/>
                <h6 style="text-align:left;margin-top:8px;">
                    Pak Budi
                    <span style="float:right;">
                        5 Day Ago
                    </span>
                </h6>
            </div>
        </div>

        <div class="row" id="row2">
            <div class="col-md">
                <img src="https://images.unsplash.com/photo-1527199768775-bdabf8b32f61?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80" width="250" height="250" data-toggle="modal" data-target="#modal"/>
                <h6 style="text-align:left;margin-top:8px;">
                    Pak Budi
                    <span style="float:right;">
                        5 Day Ago
                    </span>
                </h6>
            </div>
            <div class="col-md">
                <img src="https://images.unsplash.com/photo-1429497419816-9ca5cfb4571a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1051&q=80" width="250" height="250" data-toggle="modal" data-target="#modal"/>
                <h6 style="text-align:left;margin-top:8px;">
                    Pak Budi
                    <span style="float:right;">
                        5 Day Ago
                    </span>
                </h6>
            </div>
            <div class="col-md">
                <img src="https://images.unsplash.com/photo-1503708928676-1cb796a0891e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=967&q=80" width="250" height="250" data-toggle="modal" data-target="#modal"/>
                <h6 style="text-align:left;margin-top:8px;">
                    Pak Budi
                    <span style="float:right;">
                        5 Day Ago
                    </span>
                </h6>
            </div>
            <div class="col-md">
                <img src="https://images.unsplash.com/photo-1531431057391-da7a1aabd412?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=968&q=80" width="250" height="250" data-toggle="modal" data-target="#modal"/>
                <h6 style="text-align:left;margin-top:8px;">
                    Pak Budi
                    <span style="float:right;">
                        5 Day Ago
                    </span>
                </h6>
            </div>
        </div>

        <div class="row" id="row3">
            <div class="col-md">
                <img src="https://images.unsplash.com/uploads/14123892966835548e7bd/14369636?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80" width="250" height="250" data-toggle="modal" data-target="#modal"/>
                <h6 style="text-align:left;margin-top:8px;">
                    Pak Budi
                    <span style="float:right;">
                        5 Day Ago
                    </span>
                </h6>
            </div>
            <div class="col-md">
                <img src="https://images.unsplash.com/photo-1591588582259-e675bd2e6088?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=967&q=80" width="250" height="250" data-toggle="modal" data-target="#modal"/>
                <h6 style="text-align:left;margin-top:8px;">
                    Pak Budi
                    <span style="float:right;">
                        5 Day Ago
                    </span>
                </h6>
            </div>
            <div class="col-md">
                <img src="https://images.unsplash.com/photo-1531834685032-c34bf0d84c77?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=987&q=80" width="250" height="250" data-toggle="modal" data-target="#modal"/>
                <h6 style="text-align:left;margin-top:8px;">
                    Pak Budi
                    <span style="float:right;">
                        5 Day Ago
                    </span>
                </h6>
            </div>
            <div class="col-md">
                <img src="https://cdn.pixabay.com/photo/2019/02/06/16/32/architect-3979490_1280.jpg" width="250" height="250" data-toggle="modal" data-target="#modal"/>
                <h6 style="text-align:left;margin-top:8px;">
                    Pak Budi
                    <span style="float:right;">
                        5 Day Ago
                    </span>
                </h6>
            </div>
        </div>

        <div class="row" id="row4">

        </div>

    </div>
<!-- Gallery -->
</div>
<!-- Container -->

<!-- ModalImage -->
    <div class="modal" id="modal" tabindex="-1">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-4"><img src="https://images.unsplash.com/photo-1565942314814-d647a9a5338b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80" width="450" height="550"/></div>
                                <div class="vl" style="margin-left:150px"></div>
                                <div class="col-md-4" style="margin-left:20px;margin-top:10px;">
                                    <h4>Pak Budi</h4>
                                    <h6 style="color:yellow;">Kontraktor</h6>
                                    <p> 
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                                    when an unknown printer took a galley of type and scrambled it to make a type 
                                    specimen book. It has survived not only five 
                                    </br> </br>
                                    It is a long established fact that a reader will be distracted by the readable content
                                    of a page when looking at its layout. The point of using Lorem Ipsum is that it has a 
                                    more-or-less normal distribution of letters, as opposed to using 'Content here, content here', 
                                    making it look like readable English. Many desktop publishing packages and web page editors now 
                                    use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web 
                                    sites still in their infancy. Various versions have evolved over the years, sometimes by accident, 
                                    sometimes on purpose (injected humour and the like).
                                    </p>
                                    <h6 style="color:yellow;">20 Juli 2020</h6>
                                </div>
                                <div class="col">
                                <div class="dropdown">
                                        <i class="fa fa-ellipsis-h fa-lg" aria-hidden="true" style="margin-left:120px;margin-top:20px;" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#"><i class="fa fa-pencil"></i>&nbsp;Edit</a>
                                            <a class="dropdown-item" href="#"><i class="fa fa-trash"></i>&nbsp;Hapus</a>
                                        </div>                     
                                    </di>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- ModalImage -->

<!-- ModalTambah -->
    <div class="modal" id="modalTambah" tabindex="-1">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4">
                                Upload File
                                <!-- <div id="wrapper"> -->
                                    <div id="drop-area">
                                        <i class="fa fa-cloud-upload fa-5x" aria-hidden="true" style="margin-top:20px;color:blue;"></i>
                                        <h3 class="drop-text">Drop Document File Here</h3>
                                        <button type="file" class="btn btn-primary"><input type="file"></button>
                                    </div>
                                <!-- </div> -->
                            </div>
                            <div class="vl" style="margin-left:150px"></div>
                            <div class="col-md-4" style="margin-left:20px;">
                                <div class="row">
                                    <div class="form-group" style="width:400px;">
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <img src="https://cdn.pixabay.com/photo/2019/02/06/16/32/architect-3979490_1280.jpg" width="360" height="200"/> 
                                </div>
                                <div class="row">
                                    <input class="form-control" type="text" placeholder="Pilih Tag" readonly>
                                    <div class="col">
                                        <button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">Batal</button>
                                    </div>
                                    <div class="col">
                                        <button type="button" class="btn btn-warning btn-block" onClick="addImage()">Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
<!-- ModalTambah -->



<!-- SCRIPTS -->

<script>
    function addImage() {
        let node =document.createElement("div");
        let imagenode = document.createElement("img");
        node.className = "col-md";
        imagenode.src = "https://cdn.pixabay.com/photo/2019/02/06/16/32/architect-3979490_1280.jpg";
        imagenode.id="imageTambah"
        imagenode.style.width = "250px";
        imagenode.style.height = "250px";
        node.appendChild(imagenode);
        document.getElementById("row4").appendChild(node);
        addText();
    }
    function addText(){
        let h = document.createElement('h6');
        h.createTextNode("Pak Budi");
        document.getElementById("imageTambah").appendChild(h);
    }
</script>

<!-- -->

</body>
</html>
