
    var tree = document.getElementById('tree');

    /* проверить на попадание события в заголовок LI */
    function isOverTitle(evt, li) {
      /* обернуть заголовок в span */
      var titleWrapper = document.createElement('span');
      var titleTextNode = li.firstChild; // <li>TITLE...
      li.insertBefore(titleWrapper, titleTextNode); // <li><span></span>TITLE
      titleWrapper.appendChild(titleTextNode); // <li><span>TITLE</span>

      /* определить, был ли клик по координатам - в SPAN ?*/
      var isClickOnTitle = (document.elementFromPoint(evt.clientX, evt.clientY) == titleWrapper);

      /* в любом случае вернуть заголовок в текст обратно перед тем как идти дальше */
      titleWrapper.removeChild(titleWrapper.firstChild); // <li><span></span>
      li.replaceChild(titleTextNode, titleWrapper); // <li>TITLE...

      return isClickOnTitle;
    }

    /* отслеживаем клики на всём дереве */
    tree.onclick = function(evt) {
      var evt = evt || event;
      var target = evt.target || evt.srcElement;


      if (!isOverTitle(evt, target)) {
        return; // клик не на заголовке
      }

      /* раскрыть-закрыть детей */
      var node = target.getElementsByTagName('ul')[0];
      if (!node) return; // нет детей

      node.style.display = node.style.display ? '' : 'none';
    }