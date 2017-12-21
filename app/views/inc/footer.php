<?php

use app\assets\Assets;
use app\libraries\AssetsManager;

?>


</div>
<?php
//register js files
AssetsManager::registerJS(Assets::$js);
?>
</body>
</html>