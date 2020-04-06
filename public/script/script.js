$(".tarefa").click(function(){
    $.post("demo_test.asp", function(data, status){
      alert("Deu tudo certo!");
    });
});