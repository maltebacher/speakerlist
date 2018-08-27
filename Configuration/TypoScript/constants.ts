
plugin.tx_speakerlist_speakerlistfe {
    view {
        # cat=plugin.tx_speakerlist_speakerlistfe/file; type=string; label=Path to template root (FE)
        templateRootPath = EXT:speakerlist/Resources/Private/Templates/
        # cat=plugin.tx_speakerlist_speakerlistfe/file; type=string; label=Path to template partials (FE)
        partialRootPath = EXT:speakerlist/Resources/Private/Partials/
        # cat=plugin.tx_speakerlist_speakerlistfe/file; type=string; label=Path to template layouts (FE)
        layoutRootPath = EXT:speakerlist/Resources/Private/Layouts/
    }
    persistence {
        # cat=plugin.tx_speakerlist_speakerlistfe//a; type=string; label=Default storage PID
    }
}
