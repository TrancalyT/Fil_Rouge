mybutton = document.getElementById("myBtn");

window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (
    document.body.scrollTop > 1000 ||
    document.documentElement.scrollTop > 1000
  ) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

$(function () {
  $("#displayNews").hide();
  $(function () {
    $("#newsbutton").click(function () {
      $("#displayNews").toggle(500);
    });
  });
});

$(function () {
  $(".corps").hide();
  $(function () {
    $(".image").click(function () {
      $(".corps").toggle(500);
    });
  });
});
