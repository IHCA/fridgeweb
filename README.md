# fridgeweb

2023/9/15  新增刪除冰箱內食物

routes\web.php

resources\views\show\show-fridge.blade.php

resources\views\content\edit.php

app\Http\Controllers\FridgeContentController.php



------------------------------------------------------

2023/9/10  新增編輯及刪除冰箱

routes\web.php

resources\views\show\show-fridge.blade.php

resources\views\fridgeedit\edit.blade.php

app\Http\Requests\FridgeeditUpdateRequest.php

app\Http\Controllers\FridgeEditController.php


------------------------------------------------------


app\Http\Controllers\Auth\RegisteredUserController.php

app\Http\Controllers\AddFridgeController.php

app\Http\Controllers\ProfileController.php

app\Http\Controllers\ShowController.php

app\Models\Fridge.php

app\Models\User.php

database\migrations\2014_10_12_000000_create_users_table.php

database\migrations\2023_0820_create_fridge_table.php

(New Folder)resources\views\add

resources\views\add\fridge.blade.php

resources\views\auth\register.blade.php

(New Folder)resources\views\show

resources\views\show\show-fridge.blade.php

resources\views\dashboard.blade.php

routes\web.php

登入後可新增冰箱及看到自己新增的冰箱

