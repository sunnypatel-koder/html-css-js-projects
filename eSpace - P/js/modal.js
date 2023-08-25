var searchModal = document.getElementById("searchModal");

$(document).ready(function() {
    $("#click_Search").click(function() {
        $("#searchModal").fadeIn();
    })
    $("#searchModal #close").click(function() {
            $("#searchModal").fadeOut();
        })
        // window.onclick = function(event) {
        //     if (event.target == searchModal) {
        //         $("#searchModal").fadeOut();
        //     }
        // }
})

var userSetting = document.getElementById("userSetting");

$(document).ready(function() {
    $("#click_Setting").click(function() {
        $("#userSetting").fadeIn();
    })
    $("#userSetting #close").click(function() {
            $("#userSetting").fadeOut();
        })
        // window.onclick = function(event) {
        //     if (event.target == userSetting) {
        //         $("#userSetting").fadeOut();
        //     }
        // }
})