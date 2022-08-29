function showMoreExamplesRetarget(type) {
  $("#" + type).removeClass("d-none");
  $(".examples_main_retarget").addClass("d-none");
}
function showAllExamplesRetarget() {
  $(".examples_style_retarget-photos > div").removeClass("d-none");
  $(".examples_main_retarget").addClass("d-none");
  $(".examples_style_retarget_more").addClass("d-none");
}
function hideMoreExamplesRetarget(type) {
  $(".examples_main_retarget").removeClass("d-none");
  $("#" + type).addClass("d-none");
  $(".examples_style_retarget_more").removeClass("d-none");
  $(".examples_style_retarget-photos > div").addClass("d-none");
  $(".examples_style_retarget-photos > div.start_retarget").removeClass(
    "d-none"
  );
  $(".examples_style_retarget-photos > div:last-child").removeClass("d-none");
  var scrollTop = $("#examples_anchor").offset().top;
  $("body").scrollTop(scrollTop);
}
