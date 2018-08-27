
plugin.tx_speakerlist_speakerlistfe {
    view {
        templateRootPaths.0 = EXT:speakerlist/Resources/Private/Templates/
        templateRootPaths.1 = {$plugin.tx_speakerlist_speakerlistfe.view.templateRootPath}
        partialRootPaths.0 = EXT:speakerlist/Resources/Private/Partials/
        partialRootPaths.1 = {$plugin.tx_speakerlist_speakerlistfe.view.partialRootPath}
        layoutRootPaths.0 = EXT:speakerlist/Resources/Private/Layouts/
        layoutRootPaths.1 = {$plugin.tx_speakerlist_speakerlistfe.view.layoutRootPath}
    }
    persistence {
        #storagePid = {$plugin.tx_speakerlist_speakerlistfe.persistence.storagePid}
        storagePid = 9
        #recursive = 1
        classes {
            MfB\Speakerlist\Domain\Model\Speaker {
                mapping {
                    tableName = tx_sfeventmgt_domain_model_speaker
                    columns {
                        name.mapOnProperty = name
                    }
                }
            }
        }
    }
    features {
        #skipDefaultArguments = 1
        # if set to 1, the enable fields are ignored in BE context
        ignoreAllEnableFieldsInBe = 0
        # Should be on by default, but can be disabled if all action in the plugin are uncached
        requireCHashArgumentForActionArguments = 1
    }
    mvc {
        #callDefaultActionIfActionCantBeResolved = 1
    }
}

# these classes are only used in auto-generated templates
plugin.tx_speakerlist._CSS_DEFAULT_STYLE (
    textarea.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    input.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    .tx-speakerlist table {
        border-collapse:separate;
        border-spacing:10px;
    }

    .tx-speakerlist table th {
        font-weight:bold;
    }

    .tx-speakerlist table td {
        vertical-align:top;
    }

    .typo3-messages .message-error {
        color:red;
    }

    .typo3-messages .message-ok {
        color:green;
    }
)
