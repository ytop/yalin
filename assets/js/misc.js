$(function () {
  var comments = $("#comments");
  $.getJSON("data.php", function (json) {
    $.each(json, function (index, array) {
      var txt =
        "<p><strong>" +
        array["user"] +
        "</strong>：" +
        array["comment"] +
        "<span>" +
        array["addtime"] +
        "</span></p>";
      comments.append(txt);
    });
  });
  //将评论的内容展出
  $("#add").click(function () {
    var user = $("#user").val();
    var txt = $("#txt").val();
    $.ajax({
      type: "POST",
      url: "comment.php",
      data: "user=" + user + "&txt=" + txt,
      dataType: "JSON",
      success: function (res) {
        if (res.code == 1) {
          var str =
            "<p><strong>" +
            res.user +
            "</strong>：" +
            res.txt +
            "<span>刚刚</span></p>";
          comments.prepend(str);
          $("#message").show().html("发表成功！").fadeOut(1000);
          $("#txt").attr("value", "");
        } else {
          $("#message").show().html(res.message).fadeOut(1000);
        }
      },
    });
  });
});

function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "阅读全文";
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "收起";
    moreText.style.display = "inline";
  }
}
