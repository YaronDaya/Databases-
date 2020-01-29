
$(document).ready(function(){

    $("#delete").click(function(){
      $(".pik").fadeOut();
        $(".dele").fadeIn();
        $("#result_delete").html("");
    });

    $("#Update").click(function(){
      $(".pik").fadeOut();
        $(".up").fadeIn();
        $("#result_update").html("");
    });

    $("#insert").click(function(){
      $(".pik").fadeOut();
        $(".ins").fadeIn();
        $("#result_insret").html("");
    });


    $("#Search").click(function(){
      $(".pik").fadeOut();
        $(".sear").fadeIn();
        $("#result_search").html("");
    });

        $("#Show").click(function(){
          $(".pik").fadeOut();
          $(".showTable").fadeIn();
          $("#result_show").html("");
    });


    $("#delete_engineers").click(function(){
      $(".dele1").fadeOut();
          $(".engi").fadeIn();
          $("#result_delete").html("");
  });

$("#delete_projects").click(function(){
    $(".dele1").fadeOut();
        $(".proj").fadeIn();
        $("#result_delete").html("");
});

$("#delete_software_Field").click(function(){
    $(".dele1").fadeOut();
        $(".soft").fadeIn();
        $("#result_delete").html("");
});

$("#insert_engineers").click(function(){
    $(".inser").fadeOut();
        $(".engin").fadeIn();
        $("#result_insret").html("");
});

$("#insert_projects").click(function(){
    $(".inser").fadeOut();
        $(".proje").fadeIn();
        $("#result_insret").html("");
});

$("#insert_software_Field").click(function(){
    $(".inser").fadeOut();
        $(".software").fadeIn();
        $("#result_insret").html("");
});

$("#insert_Grade").click(function(){
    $(".inser").fadeOut();
        $(".Grade").fadeIn();
        $("#result_insret").html("");
});



$("#update_engineers").click(function(){
    $(".upd").fadeOut();
        $(".enginn").fadeIn();
          $("#result_update").html("");
});

$("#update_projects").click(function(){
    $(".upd").fadeOut();
        $(".projec").fadeIn();
          $("#result_update").html("");
});


$("#update_software_Field").click(function(){
    $(".upd").fadeOut();
        $(".software_Fie").fadeIn();
          $("#result_update").html("");
});


$("#search_engineers").click(function(){
    $(".search").fadeOut();
        $(".enginn").fadeIn();
        $("#result_search").html("");
});

$("#search_projects").click(function(){
    $(".search").fadeOut();
        $(".projec").fadeIn();
        $("#result_search").html("");
});

$("#search_software_Field").click(function(){
    $(".search").fadeOut();
        $(".softwf").fadeIn();
        $("#result_search").html("");
});


$("#show_engineers").click(function(){
  $(".show").fadeOut();
      $(".Engi_").fadeIn();
      $("#result_delete").html("");
});

$("#show_projects").click(function(){
  $(".show").fadeOut();
      $(".Proje_").fadeIn();
      $("#result_delete").html("");
});


$("#show_software_Field").click(function(){
  $(".show").fadeOut();
      $(".softwareField_").fadeIn();
      $("#result_delete").html("");
});



$("#show_group_by_field_number").click(function(){
  $(".show").fadeOut();
      $(".Group_By_Field_Number").fadeIn();
      $("#result_delete").html("");
});

$("#show_average").click(function(){
  $(".show").fadeOut();
      $(".average").fadeIn();
      $("#result_delete").html("");
});


$("#show_Development_stage").click(function(){
  $(".show").fadeOut();
      $(".Development_stage").fadeIn();
      $("#result_delete").html("");
});


$("#show_busyengineers").click(function(){
  $(".show").fadeOut();
      $(".busyengineers").fadeIn();
      $("#result_delete").html("");
});



$("#show_MileStoneAndMonth").click(function(){
  $(".show").fadeOut();
      $(".mile_stone_and_amount").fadeIn();
      $("#result_delete").html("");
});


$("#Delete_engineers_form").submit(function(){
  var delet_engine= new FormData(this);
  $.ajax({
          url:"php/Delete_engineer.php",
          type:"POST",
          data:delet_engine,
          async:false,
          success:function(data){
            $("#result_delete").html(data);
          },
          cache:false,
          contentType:false,
          processData:false

  });
  return false;
});



$("#Delete_project_form").submit(function(){
  var delet_projrct= new FormData(this);
  $.ajax({
          url:"php/Delete_projects_.php",
          type:"POST",
          data:delet_projrct,
          async:false,
          success:function(data){
            $("#result_delete").html(data);
          },
          cache:false,
          contentType:false,
          processData:false

  });
  return false;
});



$("#Delete_softwarefield_form").submit(function(){
  var delet_softwarefield= new FormData(this);
  $.ajax({
          url:"php/Delete_Software_field.php",
          type:"POST",
          data:delet_softwarefield,
          async:false,
          success:function(data){
            $("#result_delete").html(data);
          },
          cache:false,
          contentType:false,
          processData:false

  });
  return false;
});


$("#Update_engin_form").submit(function(){
var Update_engin= new FormData(this);
$.ajax({
        url:"php/update_engineers.php",
        type:"POST",
        data:Update_engin,
        async:false,
        success:function(data){
          $("#result_update").html(data);
        },
        cache:false,
        contentType:false,
        processData:false

});
return false;
});


$("#update_projects_form").submit(function(){
var Update_projects= new FormData(this);
$.ajax({
        url:"php/update_projects.php",
        type:"POST",
        data:Update_projects,
        async:false,
        success:function(data){
          $("#result_update").html(data);
        },
        cache:false,
        contentType:false,
        processData:false

});
return false;
});

$("#update_SoftwareField_form").submit(function(){
var Update_SoftwareField= new FormData(this);
$.ajax({
        url:"php/Update_SoftWareField.php",
        type:"POST",
        data:Update_SoftwareField,
        async:false,
        success:function(data){
          $("#result_update").html(data);
        },
        cache:false,
        contentType:false,
        processData:false

});
return false;
});


$("#insert_engineers_form").submit(function(){
var insert_engineers= new FormData(this);
$.ajax({
        url:"php/insert_engineers.php",
        type:"POST",
        data:insert_engineers,
        async:false,
        success:function(data){
          $("#result_insret").html(data);
        },
        cache:false,
        contentType:false,
        processData:false

});
return false;
});

$("#insert_Projects_form").submit(function(){
var insert_projects= new FormData(this);
$.ajax({
        url:"php/insert_projects.php",
        type:"POST",
        data:insert_projects,
        async:false,
        success:function(data){
          $("#result_insret").html(data);
        },
        cache:false,
        contentType:false,
        processData:false

});
return false;
});



$("#insert_SoftWareField_form").submit(function(){
var insert_Soft= new FormData(this);
$.ajax({
        url:"php/insert_Soft_WareField.php",
        type:"POST",
        data:insert_Soft,
        async:false,
        success:function(data){
          $("#result_insret").html( data);
        },
        cache:false,
        contentType:false,
        processData:false

});
return false;
});

$("#insert_grade_form").submit(function(){
var insert_grade= new FormData(this);
$.ajax({
        url:"php/insert_Grade.php",
        type:"POST",
        data:insert_grade,
        async:false,
        success:function(data){
          $("#result_insret").html(data);
        },
        cache:false,
        contentType:false,
        processData:false

});
return false;
});


$("#search_engineers_form").submit(function(){
var search_engi= new FormData(this);
$.ajax({
        url:"php/search_engineers.php",
        type:"POST",
        data:search_engi,
        async:false,
        success:function(data){
          $("#result_search").html(data);

        },
        cache:false,
        contentType:false,
        processData:false

});
return false;
});

$("#search_projects_form").submit(function(){
var search_proj= new FormData(this);
$.ajax({
        url:"php/search_projects.php",
        type:"POST",
        data:search_proj,
        async:false,
        success:function(data){
          $("#result_search").html(data);
        },
        cache:false,
        contentType:false,
        processData:false

});
return false;
});




$("#search_softwareField_form").submit(function(){
var search_soft= new FormData(this);
$.ajax({
        url:"php/search_software_Field.php",
        type:"POST",
        data:search_soft,
        async:false,
        success:function(data){
          $("#result_search").html(data);
        },
        cache:false,
        contentType:false,
        processData:false

});
return false;
});


$("#show_engineers_form").submit(function(){
var search_soft= new FormData(this);
$.ajax({
        url:"php/show_engineers.php",
        type:"POST",
        data:search_soft,
        async:false,
        success:function(data){
          $("#result_show").html(data);
        },
        cache:false,
        contentType:false,
        processData:false

});
return false;
});


$("#show_projects_form").submit(function(){
var search_soft= new FormData(this);
$.ajax({
        url:"php/show_projects.php",
        type:"POST",
        data:search_soft,
        async:false,
        success:function(data){
          $("#result_show").html(data);
        },
        cache:false,
        contentType:false,
        processData:false

});
return false;
});

$("#show_softwareField_form").submit(function(){
var search_soft= new FormData(this);
$.ajax({
        url:"php/show_SoftWareField.php",
        type:"POST",
        data:search_soft,
        async:false,
        success:function(data){
          $("#result_show").html(data);
        },
        cache:false,
        contentType:false,
        processData:false

});
return false;
});


$("#show_Group_By_Field_Number_form").submit(function(){
var search_soft= new FormData(this);
$.ajax({
        url:"php/show_Group_By_Field_Number.php",
        type:"POST",
        data:search_soft,
        async:false,
        success:function(data){
          $("#result_show").html(data);
        },
        cache:false,
        contentType:false,
        processData:false

});
return false;
});


$("#show_average_form").submit(function(){
var show_ave= new FormData(this);
$.ajax({
        url:"php/AVG.php",
        type:"POST",
        data:show_ave,
        async:false,
        success:function(data){
          $("#result_show").html(data);
        },
        cache:false,
        contentType:false,
        processData:false

});
return false;
});


$("#show_average_min_form").submit(function(){
var show_ave= new FormData(this);
$.ajax({
        url:"php/AVG_MIN.php",
        type:"POST",
        data:show_ave,
        async:false,
        success:function(data){
          $("#result_show").html(data);
        },
        cache:false,
        contentType:false,
        processData:false

});
return false;
});



$("#show_Development_stage_form").submit(function(){
var show_ave= new FormData(this);
$.ajax({
        url:"php/Development_stage.php",
        type:"POST",
        data:show_ave,
        async:false,
        success:function(data){
          $("#result_show").html(data);
        },
        cache:false,
        contentType:false,
        processData:false

});
return false;
});


$("#show_busyengineers_form").submit(function(){
var show_ave= new FormData(this);
$.ajax({
        url:"php/busy_engineers.php",
        type:"POST",
        data:show_ave,
        async:false,
        success:function(data){
          $("#result_show").html(data);
        },
        cache:false,
        contentType:false,
        processData:false

});
return false;
});


$("#show_mile_stone_and_amount_form").submit(function(){
var show_ave= new FormData(this);
$.ajax({
        url:"php/mile_stone_and_amount.php",
        type:"POST",
        data:show_ave,
        async:false,
        success:function(data){
          $("#result_show").html(data);
        },
        cache:false,
        contentType:false,
        processData:false

});
return false;
});





});
