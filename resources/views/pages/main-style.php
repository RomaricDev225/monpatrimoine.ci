<style>
    form input.designed{
        border: 2px solid forestgreen;                        
        font-weight:bold;
        padding:2%
    }

    form select.designed{
        border: 2px solid forestgreen;                        
        font-weight:bold;
        height:50px;
    }


    .b{
        font-weight:bold;
    }
    
    label.b{
        color:#F46520;
    }


</style>

<script>
    $(()=>{
        function dateActuelle() {
            var d = new Date();

            var month = d.getMonth()+1;
            var day = d.getDate();
            var minutes = d.getMinutes();
            var heures = d.getHours();
            var secondes = d.getSeconds();

            var datetime = (day<10 ? '0' : '') + day + '/' + (month<10 ? '0' : '') + month + "/" + d.getFullYear() + " " + (heures<10 ? '0' : '') + heures + ":" + (minutes<10 ? '0' : '') + minutes + ":" + (secondes<10 ? '0' : '') + secondes;
            return datetime;
        }


        function loadImage(selector_inputfile, parent_selector_inputfile){
            var sel_1 = "." + parent_selector_inputfile + " p.alert-success"
            var sel_2 = "." + parent_selector_inputfile + " p.alert-danger"
            var sel_3 = "." + parent_selector_inputfile + " img"
            $(sel_1).addClass('d-none');
            var property = document.getElementById(selector_inputfile).files[0];
            var image_name = property.name;
            var image_extension = image_name.split('.').pop().toLowerCase();
            var image_size = property.size;
            if (image_size>2000000) {
                $(sel_1).text("* La taille de l'image est trop grande !").removeClass('d-none').addClass("alert-danger");
            } else {
                var form_data = new FormData();
                form_data.append("file", property);
                $.ajax({
                    url : "traitements/upload.php",
                    method : "POST",
                    data : form_data,
                    contentType : false,
                    cache : false,
                    processData : false,
                    beforeSend : function (){
                        $(sel_1).removeClass('d-none').removeClass('alert-danger').addClass("alert-info").text("Chargement du fichier ...");
                    },
                    success : function (data) {
                        $(sel_1).addClass('d-none');
                        $(sel_2).addClass('d-none');
                        $(sel_3).attr('src', data)
                        var sel_4 = "." + parent_selector_inputfile + " #filename"
                        $(sel_4).val(data)
                        // nom_image = data
                        // alert(data)
                    }
                    
                })
                
            }
        }
    })
</script>