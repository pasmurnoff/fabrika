<div class="wrap">

    <h2 class="nav-tab-wrapper" id="ple-tabs">
        <a href="#ple-fabrics" class="nav-tab<?php if ($_GET['status'] != 'manager_deleted' && $_GET['status'] != 'manager_added'): ?> nav-tab-active <?php endif?> ">Фабрики</a>
        <a href="#ple-managers" class="nav-tab <?php if ($_GET['status'] == 'manager_deleted' || $_GET['status'] == 'manager_added'): ?> nav-tab-active <?php endif?>">Менеджеры</a>
    </h2>
    <?php if ($_GET['status'] && $_GET['status'] == 'fabric_added') : ?>
        <div class="notice is-dismissible notice-success">
            <p><strong>Фабрика добавлена</strong>.</p>
            <button type="button" class="notice-dismiss"><span class="screen-reader-text">Скрыть это уведомление.</span></button></div>
    <?php endif; ?>
    <?php if ($_GET['status'] && $_GET['status'] == 'manager_added') : ?>
        <div class="notice is-dismissible notice-success">
            <p><strong>Менеджер добавлен</strong>.</p>
            <button type="button" class="notice-dismiss"><span class="screen-reader-text">Скрыть это уведомление.</span></button></div>
    <?php endif; ?>
    <?php if ($_GET['status'] && $_GET['status'] == 'fabric_deleted') : ?>
        <div class="notice is-dismissible notice-red">
            <p><strong>Фабрика удалена</strong>.</p>
            <button type="button" class="notice-dismiss"><span class="screen-reader-text">Скрыть это уведомление.</span></button></div>
    <?php endif; ?>
    <?php if ($_GET['status'] && $_GET['status'] == 'manager_deleted') : ?>
        <div class="notice is-dismissible notice-red">
            <p><strong>Менеджер удален</strong>.</p>
            <button type="button" class="notice-dismiss"><span class="screen-reader-text">Скрыть это уведомление.</span></button></div>
    <?php endif; ?>
    <div class="tab-content">

        <div id="ple-fabrics" class="nav-tab-content <?php if ($_GET['status'] != 'manager_deleted' && $_GET['status'] != 'manager_added'): ?> active <?php endif?>">
            <h3>Добавить фабрику</h3>
            <form method="post" enctype="multipart/form-data">

                <label>Название</label>
                <input type="text" name="fabric[name]" required style="min-width: 400px">
                <label>Email</label>
                <input type="text" name="fabric[email]" style="min-width: 400px" required> <br/>
                <input type='submit' class="button-primary"  name = "add_fabric" value="<?php esc_attr_e('Добавить', 'mytextdomain'); ?>" />
            </form>
            <?php if (!empty($fabrics)) : ?>
                <h3>Фабрики</h3>
                <table class="wp-list-table widefat fixed striped posts">
                    <thead>
                    <tr>

                        <th>Название</th>
                        <th>Email</th>
                        <th>Опции</th>
                    </tr>

                    </thead>
                    <tbody>
                    <?php foreach ($fabrics as $fabric) : ?>
                        <tr>

                            <td><?php echo stripslashes($fabric->name) ?></td>
                            <td><?php echo $fabric->email ?></td>
                            <td><a href="<?php get_admin_url(); ?>admin.php?page=fabric-vendors&delete_fabric=<?php echo $fabric->id?>" onclick="return confirm('Удалить фабрику?')">удалить</a></td>
                        </tr>

                    <?php endforeach; ?>
                    </tbody>

                </table>
            <?php endif; ?>


        </div>
        <div id="ple-managers" class="nav-tab-content <?php if ($_GET['status'] == 'manager_deleted' || $_GET['status'] == 'manager_added'): ?> active <?php endif?>">
            <h3>Добавить сотрудника</h3>
            <form method="post" enctype="multipart/form-data">

                <label>Имя</label>
                <input type="text" name="manager[name]" required style="min-width: 400px">
                <label>Email</label>
                <input type="email" name="manager[email]" required style="min-width: 400px">
                <label>Контактные данные</label>
                <input type="text" name="manager[contact]" style="min-width: 400px" required> <br/>
                <input type='submit' class="button-primary"  name = "add_manager" value="<?php esc_attr_e('Добавить', 'mytextdomain'); ?>" />
            </form>
            <?php if (!empty($managers)) : ?>
                <h3>Менеджеры</h3>
                <table class="wp-list-table widefat fixed striped posts">
                    <thead>
                    <tr>

                        <th>Имя</th>
                        <th>Email</th>
                        <th>Контактные данные</th>
                        <th>Опции</th>
                    </tr>

                    </thead>
                    <tbody>
                    <?php foreach ($managers as $manager) : ?>
                        <tr>

                            <td><?php echo $manager->name ?></td>
                            <td><?php echo $manager->email ?></td>
                            <td><?php echo $manager->contact ?></td>
                            <td><a href="<?php get_admin_url(); ?>admin.php?page=fabric-vendors&delete_manager=<?php echo $manager->id?>" onclick="return confirm('Удалить менеджера?')">удалить</a></td>
                        </tr>

                    <?php endforeach; ?>
                    </tbody>

                </table>
            <?php endif; ?>
        </div>
    </div>


</div>