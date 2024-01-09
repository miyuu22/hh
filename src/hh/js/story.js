
  function showPopup(id) {
// 表示したいpopのidを取得
    popup = document.getElementById("ulPopup"+id);
    popoup1 = document.getElementById("ulPopupback"+id);
    // popupを表示
    if (popup.style.display === "none" || popup.style.display === "" ) {
        popup.style.display = "block";
        popoup1.style.display = "block";
    }else if(popup.style.display !== "none"){
        popup.style.display = "none";
        // popup1.style.display = "none";
    }
  }