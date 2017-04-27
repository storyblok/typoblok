
plugin.tx_typoblok_storyblok {
  view {
    # cat=plugin.tx_typoblok_storyblok/file; type=string; label=Path to template root (FE)
    templateRootPath = EXT:typoblok/Resources/Private/Templates/
    # cat=plugin.tx_typoblok_storyblok/file; type=string; label=Path to template partials (FE)
    partialRootPath = EXT:typoblok/Resources/Private/Partials/
    # cat=plugin.tx_typoblok_storyblok/file; type=string; label=Path to template layouts (FE)
    layoutRootPath = EXT:typoblok/Resources/Private/Layouts/
  }
  persistence {
    # cat=plugin.tx_typoblok_storyblok//a; type=string; label=Default storage PID
    storagePid =
  }
}
