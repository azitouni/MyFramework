var temp = '';
var operator = [];
var digit = [];

var Calculator = {

  results_id:    'calculator-result',
  results_value: '0',
  memory_id:     'calculator-screen',
  memory_value:  '',

  calculate: function() {
    var sent_digit = JSON.stringify(digit);
    var sent_operator = JSON.stringify(operator);
     $.ajax({
        url : 'index.php?controller=compute&action=traitement',// + operator[0],
        type : 'GET',
        dataType : 'JSON',
        data: {
          digit : sent_digit,
          operator : sent_operator
        },
        success : function(result, statut){
          console.log(result);
           $("#calculator-result").html(result);
         },

         error : function(resultat, statut, erreur){

         },

         complete : function(resultat, statut){

         }

       });
    this.refresh();
  },

  put: function(value) {
    this.memory_value += value;
    this.update_memory();
  },

  reset: function() {
    operator = [];
    digit = [];
    this.memory_value = '';
    this.results_value = '0';
    this.refresh();
  },

  refresh: function() {
    this.update_result();
    this.update_memory();
  },

  update_result: function() {
    document.getElementById(this.results_id).innerHTML = this.results_value;
  },

  update_memory: function() {
    document.getElementById(this.memory_id).innerHTML = this.memory_value;
  },
}

$(document).ready(function() {

  $(".btn").click(function(e) {
    e.preventDefault();

    if ($(this).data('constant') != undefined){
      operator.push($(this).data('constant'));
      digit.push(temp);
      temp = '';
      console.log(digit);
      Calculator.put($(this).html());
    }

    if ($(this).data('method') != undefined){
      if(temp !== ''){
        digit.push(temp);
        temp = '';
        console.log(digit);
      }
      return Calculator[$(this).data('method')]();
    }

    if ($(this).data('value') != undefined){
      temp += $(this).html();
      return Calculator.put($(this).html());
    }

  });
});
