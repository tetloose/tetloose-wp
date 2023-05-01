# First Load

## Installing Wordpress

Once the project has been set up using `yarn setup`, open your browser and goto the project host i.e. `project-name.test/wp/wp-admin`.

You're presented with the Wordpress installer.

Choose your language and click **Continue**.

### Usernames

Prefix your user name with {user-name}-dev, **-dev** is a wildcard that gives that user developer capabilities. All other users will be given a slimed down version of Wordpress UI.

Fill out the rest and click **Install Wordpress**, then Login.

## Logged in

### Users

Goto **Users** -> **{user-name}-dev** and update your profile.

Add First / Last Name and Nickname. Other wise Wordpress will show your username, this is a big security flaw, so fill out this info first.

### Theme

Goto **Appearance** -> **Themes** and activate **Tetloose-Theme**.

If you get a php error `Warning: require_once(/`, it means the theme hasn't been populated with components, run `yarn dev` to fix this.

### ACF

1. Goto **ACF** -> **Field Groups** -> **Sync available** and sync all the files.
2. Goto **ACF** -> **Post Types** -> **Sync available** and sync all post types.

### Plugins

Goto **Plugins** and activate:

1. ACF Content Analysis for Yoast SEO
2. Advanced Custom Fields: Nav Menu Field
3. Akismet Anti-Spam: Spam Protection (optional)
4. Classic Editor
5. Contact Form 7
6. Easy Post Duplicator
7. Simple Custom Post Order
8. Yoast SEO

These plugins are used for production not required in development

1. Wordfence Security
2. WPS Hide Login

### Pages

Goto **Pages** and create a new page.

Call this Homepage, or what ever you wanna call the homepage. In page attributes assign it the template **Homepage** and click **Publish**. All other pages can be left as **Default Template**.

Goto **Appearance** -> **Customize**.

You will have a few errors you can ignore these.

Click **homepage settings** -> **A static page** and select **Homepage** then click **Publish** and close the **Customizer**.

# Navigation

[THEME SETTINGS >>](theme-settings.md)
