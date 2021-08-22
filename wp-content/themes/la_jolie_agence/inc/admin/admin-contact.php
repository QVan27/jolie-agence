<?php

/**
 * Register a custom menu page.
 */
function wpdocs_register_my_contact_menu_page()
{
    add_menu_page(
        __('Contact', 'bubble'),
        'Contact',
        'manage_options',
        'contactpageadmin',
        'contact_menu_page',
        'dashicons-email-alt2',
        6
    );
}
add_action('admin_menu', 'wpdocs_register_my_contact_menu_page');

/**
 * Display a custom menu page
 */
function contact_menu_page()
{
    $urlBase = admin_url() . 'admin.php?page=contactpageadmin';
?>
    <ul>
        <li><a class="button" href="<?= $urlBase; ?>">Listing</a></li>
    </ul>
    <?php if (!empty($_GET['single'])) {
        $id = $_GET['single'];
        singleContact($urlBase, $id);
    } else {
        listingContact($urlBase);
    }
}

function singleContact($urlBase, $id)
{
    global $wpdb;
    $contact = $wpdb->get_row("SELECT * FROM {$wpdb->prefix}contact WHERE id = $id", OBJECT);
    ?>
    <div class="wrap">
        <table class="wp-list-table widefat fixed striped posts">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Objet</th>
                    <th>Numero</th>
                    <th>Message</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="the-list">
                <tr>
                    <td><?= $contact->id; ?></td>
                    <td><?= $contact->nom; ?></td>
                    <td><?= $contact->email; ?></td>
                    <td><?= $contact->objet; ?></td>
                    <td><?= $contact->numero; ?></td>
                    <td><?= $contact->message; ?></td>
                    <td><?= date('d/m/Y', strtotime($contact->created_at)); ?></td>
                </tr>
            </tbody>
        </table>
    </div>
<?php
}

function listingContact($urlBase)
{
    $urlBase = admin_url() . 'admin.php?page=contactpageadmin';
    global $wpdb;
    $contacts = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}contact ORDER BY created_at DESC", OBJECT);
?>
    <div class="wrap">
        <table class="wp-list-table widefat fixed striped posts">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Objet</th>
                    <th>Numero</th>
                    <th>Message</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="the-list">
                <?php foreach ($contacts as $contact) { ?>
                    <tr>
                        <td><?= $contact->id; ?></td>
                        <td><?= $contact->nom; ?></td>
                        <td><?= $contact->email; ?></td>
                        <td><?= $contact->objet; ?></td>
                        <td><?= $contact->numero; ?></td>
                        <td><?= $contact->message; ?></td>
                        <td><?= date('d/m/Y', strtotime($contact->created_at)); ?></td>
                        <td>
                            <a href="<?php echo $urlBase; ?>&single=<?= $contact->id; ?>">voir</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
<?php
}
