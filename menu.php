<script language="javascript" type="text/javascript">
function setActive() {
  aObj = document.getElementById('menu').getElementsByTagName('a');
  for(i=0;i<aObj.length;i++) { 
    if(document.location.href.indexOf(aObj[i].href)>=0) {
      aObj[i].className='active';
    }
  }
}
window.onload = setActive;
document.onload = setActive;
</script>

<a href="./index.php">News</a> | 
<a href="./rules.php">Rules</a> | 
<a href="./donate.php">Donate</a> | 
<a href="./forums">Forums</a> | <!--<strike>Forums</strike> |-->
<a href="./clan.php">Clan</a> |
<a href="./squad.xml">Roster</a>
