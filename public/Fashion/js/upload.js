var app = app || {};

(function(o) {
        "use strict";

        //private methods
        var ajax, getFormData, setProgress;

        ajax = function(data) {
            var xmlhttp = new XMLHttpRequest(), uploaded;

            xmlhttp.upload.addEventListener("progress", function(event){
                var percent;

                if(event.lengthComputable === true){
                    percent = Math.round((event.loaded / event.total) * 100);
                    setProgress(percent);
                }
            });


            xmlhttp.open('post', o.options.processor);

            xmlhttp.send(data);
        };

        getFormData = function(source) {
            var data = new FormData(), i;

            for(i=0; i < source.length; i++){
                data.append('file[]', source[i]);
            }



        };

        setProgress = function(value) {
            if(o.options.progressBar !== undefined){
                o.options.progressBar.style.width = value ? value + '%' : 0;
            }
            if(o.options.progressText !== undefined){
                o.options.progressTest.innerText = value ? value + '$' : '';
            }
        };


        o.uploader = function(options){
            o.options = options;

            if (o.options.file !== undefined) {
                ajax(getFormData(o.options.file.files));

            }
        }


    }
)(app);