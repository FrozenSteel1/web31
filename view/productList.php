<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Список продуктов</h1>
<table>
    <th>Идентификатор</th>
    <th>Название</th>
    <th>Цена</th>


    <? foreach ($productList as $product): ?>
      <tr>
          <td><?echo $product['id'];?></td>
          <td><?echo $product['header'];?></td>
          <td><?echo $product['price'];?></td>
          <td>
              <form action="product/productAdd" method="post">
                  <button type="submit" value="<?echo $product['id'];?>" name="add">Добавить</button>
<!--                  <input type="submit" value="--><?//echo $product['id'];?><!--" >-->

              </form></td>


      </tr>
    <? endforeach; ?>
</table>
</body>
</html>
