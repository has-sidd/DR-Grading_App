//DOM
const $ = document.querySelector.bind(document);

//APP
let App = {};
App.init = (function () {
  //Init
  function handleFileSelect(evt) {
    const files = evt.target.files; // FileList object
    
    //files template
    let template = `${Object.keys(files)
      .map(
        file => `<div class="file file--${file}">
     <div class="name"><span>${files[file].name}</span></div>
     <div class="progress active"></div>
     <div class="done">
	<a href="" target="_blank">
      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 1000 1000">
		<g><path id="path" d="M500,10C229.4,10,10,229.4,10,500c0,270.6,219.4,490,490,490c270.6,0,490-219.4,490-490C990,229.4,770.6,10,500,10z M500,967.7C241.7,967.7,32.3,758.3,32.3,500C32.3,241.7,241.7,32.3,500,32.3c258.3,0,467.7,209.4,467.7,467.7C967.7,758.3,758.3,967.7,500,967.7z M748.4,325L448,623.1L301.6,477.9c-4.4-4.3-11.4-4.3-15.8,0c-4.4,4.3-4.4,11.3,0,15.6l151.2,150c0.5,1.3,1.4,2.6,2.5,3.7c4.4,4.3,11.4,4.3,15.8,0l308.9-306.5c4.4-4.3,4.4-11.3,0-15.6C759.8,320.7,752.7,320.7,748.4,325z"</g>
		</svg>
						</a>
     </div>
    </div>`
      )
      .join("")}`;

    $(".btn-primary .badge").innerHTML = files.length;
    // $("#drop").classList.add("hidden");
    $(".second").classList.add("hasFiles");
    $(".importar").classList.add("active");
    $(".submit").classList.add("active");
    setTimeout(() => {
      $(".list-files").innerHTML = template;
    }, 1000);

    Object.keys(files).forEach(file => {
      let load = 2000 + file * 2000; // fake load
      setTimeout(() => {
        $(`.file--${file}`)
          .querySelector(".progress")
          .classList.remove("active");
        $(`.file--${file}`).querySelector(".done").classList.add("anim");
      }, load);
    });
  }

  // trigger input
  $("#triggerFile").addEventListener("click", evt => {
    evt.preventDefault();
    $("input[type=file]").click();
  });

  // drop events
  // $("#drop").ondragleave = evt => {
  //   $("#drop").classList.remove("active");
  //   evt.preventDefault();
  // };
  // $("#drop").ondragover = $("#drop").ondragenter = evt => {
  //   $("#drop").classList.add("active");

  //   evt.preventDefault();
  // };

  //drop change
  $("#drop").ondrop = evt => {
    evt.preventDefault();

    files = evt.dataTransfer.files;
    console.log(files);
    let template = `${Object.keys(files)
      .map(
        file => `<div class="file file--${file}">
     <div class="name"><span>${files[file].name}</span></div>
     <div class="progress active"></div>
     <div class="done">
	<a href="" target="_blank">
      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 1000 1000">
		<g><path id="path" d="M500,10C229.4,10,10,229.4,10,500c0,270.6,219.4,490,490,490c270.6,0,490-219.4,490-490C990,229.4,770.6,10,500,10z M500,967.7C241.7,967.7,32.3,758.3,32.3,500C32.3,241.7,241.7,32.3,500,32.3c258.3,0,467.7,209.4,467.7,467.7C967.7,758.3,758.3,967.7,500,967.7z M748.4,325L448,623.1L301.6,477.9c-4.4-4.3-11.4-4.3-15.8,0c-4.4,4.3-4.4,11.3,0,15.6l151.2,150c0.5,1.3,1.4,2.6,2.5,3.7c4.4,4.3,11.4,4.3,15.8,0l308.9-306.5c4.4-4.3,4.4-11.3,0-15.6C759.8,320.7,752.7,320.7,748.4,325z"</g>
		</svg>
						</a>
     </div>
    </div>`
      )
      .join("")}`;

    $(".btn-primary .badge").innerHTML = files.length;
    // $("#drop").classList.add("hidden");
    $(".second").classList.add("hasFiles");
    $(".importar").classList.add("active");
    $(".submit").classList.add("active");
    setTimeout(() => {
      $(".list-files").innerHTML = template;
    }, 1000);

    Object.keys(files).forEach(file => {
      let load = 2000 + file * 2000; // fake load
      setTimeout(() => {
        $(`.file--${file}`)
          .querySelector(".progress")
          .classList.remove("active");
        $(`.file--${file}`).querySelector(".done").classList.add("anim");
      }, load);
    });

    // $(".second").classList.add("hasFiles");
    $("#drop").classList.remove("active");
    // $("#drop").classList.add("hidden");
  };

  //upload more
  $(".importar").addEventListener("click", () => {
    $(".list-files").innerHTML = "";
    $(".second").classList.remove("hasFiles");
    $(".importar").classList.remove("active");
    setTimeout(() => {
      // $("#drop").classList.remove("hidden");
    }, 500);
  });

  // input change
  $("input[type=file]").addEventListener("change", handleFileSelect);
})();

//validation
const mrValidate = () => {
  if (jQuery("#mrno").val() == "") {
    jQuery("#mrError").html("Enter MR number");
    jQuery("#mrError").css("display", "block");
    jQuery("#mrno").addClass("is-invalid");
    jQuery("#mrno").focus();
    return false;
  } else {
    jQuery("#mrError").css("display", "none");
    jQuery("#mrno").removeClass("is-invalid");
    jQuery("#mrno").addClass("is-valid");
    return true;
  }
};

const orientationValidate = () => {
  if (jQuery(".orientation:checked").length == "") {
    jQuery("#orientationError").html("Select image orientation");
    jQuery("#orientationError").css("display", "block");
    jQuery(".orientation").addClass("is-invalid");
    jQuery(".orientation").focus();
    return false;
  } else {
    jQuery("#orientationError").css("display", "none");
    jQuery(".orientation").removeClass("is-invalid");
    jQuery(".orientation").addClass("is-valid");
    return true;
  }
};

const deviceValidate = () => {
  if (jQuery("select[name=device]").val() == "0") {
    jQuery("#deviceError").html("Enter device number");
    jQuery("#deviceError").css("display", "block");
    jQuery("select[name=device]").addClass("is-invalid");
    jQuery("select[name=device]").focus();
    return false;
  } else {
    jQuery("#deviceError").css("display", "none");
    jQuery("select[name=device]").removeClass("is-invalid");
    jQuery("select[name=device]").addClass("is-valid");
    return true;
  }
};

var flag;

const imgValidate = () => {
  var mrno = jQuery("#mrno").val();
  var orientation = jQuery(".orientation:checked").val();

  var device = jQuery("select[name=device]").val();
  
  jQuery.ajax({
    type: "POST",
    url: "./assets_main/php/file-upload.php",
    data: {
      mrno: mrno,
      orientation: orientation,
      device: device,
    },
    success: function (response) {
    
      if(response == 'Image already exists'){
        jQuery("#imgError").html(response);
        jQuery("#imgError").css("display", "block");
        flag = false;
        return false;
      }else{
        jQuery("#imgError").css("display", "none");
        flag = true;
        return true;
      };
      
    },
  });
};

const formValidate = () => {
  let valid = true;
  
  if (!mrValidate()) valid = false;

  if (!orientationValidate()) valid = false;

  if (!deviceValidate()) valid = false;

  if (flag == false){
    valid = false;
  }

  return valid;
};

jQuery("#mrno").on("input", function () {
  mrValidate();
  imgValidate();
});
jQuery(".orientation").on("input", function () {
  orientationValidate();
  imgValidate();
});
jQuery("#device").on("input", function () {
  deviceValidate();
  imgValidate();
});
