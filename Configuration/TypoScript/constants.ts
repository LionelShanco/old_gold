
plugin.tx_oldgold_addpost {
    view {
        # cat=plugin.tx_oldgold_addpost/file; type=string; label=Path to template root (FE)
        templateRootPath = EXT:old_gold/Resources/Private/Templates/
        # cat=plugin.tx_oldgold_addpost/file; type=string; label=Path to template partials (FE)
        partialRootPath = EXT:old_gold/Resources/Private/Partials/
        # cat=plugin.tx_oldgold_addpost/file; type=string; label=Path to template layouts (FE)
        layoutRootPath = EXT:old_gold/Resources/Private/Layouts/
    }
    persistence {
        # cat=plugin.tx_oldgold_addpost//a; type=string; label=Default storage PID
        storagePid =
    }
}

plugin.tx_oldgold_showpost {
    view {
        # cat=plugin.tx_oldgold_showpost/file; type=string; label=Path to template root (FE)
        templateRootPath = EXT:old_gold/Resources/Private/Templates/
        # cat=plugin.tx_oldgold_showpost/file; type=string; label=Path to template partials (FE)
        partialRootPath = EXT:old_gold/Resources/Private/Partials/
        # cat=plugin.tx_oldgold_showpost/file; type=string; label=Path to template layouts (FE)
        layoutRootPath = EXT:old_gold/Resources/Private/Layouts/
    }
    persistence {
        # cat=plugin.tx_oldgold_showpost//a; type=string; label=Default storage PID
        storagePid =
    }
}
