
plugin.tx_typoblok_storyblok {
  view {
    templateRootPaths.0 = EXT:typoblok/Resources/Private/Templates/
    templateRootPaths.1 = plugin.tx_typoblok_storyblok.view.templateRootPath
    partialRootPaths.0 = EXT:typoblok/Resources/Private/Partials/
    partialRootPaths.1 = plugin.tx_typoblok_storyblok.view.partialRootPath
    layoutRootPaths.0 = EXT:typoblok/Resources/Private/Layouts/
    layoutRootPaths.1 = plugin.tx_typoblok_storyblok.view.layoutRootPath
  }
  persistence {
    storagePid = plugin.tx_typoblok_storyblok.persistence.storagePid
    #recursive = 1
  }
  features {
    #skipDefaultArguments = 1
  }
  mvc {
    #callDefaultActionIfActionCantBeResolved = 1
  }
}

plugin.tx_typoblok._CSS_DEFAULT_STYLE (
    textarea.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    input.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    .tx-typoblok table {
        border-collapse:separate;
        border-spacing:10px;
    }

    .tx-typoblok table th {
        font-weight:bold;
    }

    .tx-typoblok table td {
        vertical-align:top;
    }

    .typo3-messages .message-error {
        color:red;
    }

    .typo3-messages .message-ok {
        color:green;
    }
)
