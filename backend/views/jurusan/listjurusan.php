<?php
use yii\widgets\LinkPager;
use yii\helpers\Html;

$this->title='List Jurusan';
?>
<style type="text/css"></style>
<center>

    <?php foreach ($models as $model): ?>
<div class="row">
            <div class="col-md-4">
                
                    <img class="img-responsive img-hover" src="<?= $model->foto ?>" alt="">
                </a>
            </div>
            <div class="col-md-8">
                <h3><?= Html::a($model->jurusan, ['detail', 'id' => $model->id]) ?></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, temporibus, dolores, at, praesentium ut unde repudiandae voluptatum sit ab debitis suscipit fugiat natus velit excepturi amet commodi deleniti alias possimus!</p>
                <a class="btn btn-primary" href="portfolio-item.html">View Project</a>
            </div>
        </div>
<div class="tab-panels tabs hover-left">
    
    <ul class="tab-actions filter-bottom">
        <li><a id="panel-1" href="#">Tab One</a></li>
        <li><a id="panel-2" href="#">Tab Two</a></li>
        <li><a id="panel-3" href="#">Tab Three</a></li>
    </ul>

    <div class="panel panel-1 panel-current">
        <p>
            <a class="tab-tmb" href="http://www.charlizeafricaoutreach.org" target="_blank"><img src="img/caop.jpg" width="250"/></a>
            With the general lack of roads, electricity, schools, hospitals and health clinics, 
            as well as a lack of potable water and sanitation services, we helped Mpilonhle embark on 
            a more holistic approach to address the broader needs of the community in ways which enhanced their HIV prevention work.
            In early 2011, construction began on a collaborative community initiative called Home Field Advantage (
            HFA) to bring clean water sources, sports fields, food gardens, community laundry basins, and 
            non-contaminating toilet blocks to four secondary schools.
            The generosity of CTAOP’s supporters, including the Annenberg Foundation, ONEXONE, 
            Orange County Center for Living Peace, Red Granite Pictures and many others, enabled 
            Mpilonhle to create hubs of activity at these schools that will allow their health services 
            to reach beyond enrolled students to the community at large.
            Would you like to learn more about this project? Check: 
            <a href="http://www.charlizeafricaoutreach.org/about-ctaop/mission-values/" target="_blank">Our Mission & Values </a>
        </p>
    </div>
    <div>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>
    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home">...</div>
    <div role="tabpanel" class="tab-pane" id="profile">...</div>
    <div role="tabpanel" class="tab-pane" id="messages">...</div>
    <div role="tabpanel" class="tab-pane" id="settings">...</div>
  </div>

</div>
<?php endforeach; ?>
</table>
</center>
<?= LinkPager::widget([
    'pagination' => $pages,
    ]);
?></td>
</tr>
</table>