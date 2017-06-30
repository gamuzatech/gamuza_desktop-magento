<?php
/**
 * @package     Gamuza_Desktop
 * @description Visual Component Library for Magento
 * @copyright   Copyright (c) 2017 Gamuza Technologies (http://www.gamuza.com.br/)
 * @author      Eneias Ramos de Melo <eneias@gamuza.com.br>
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Library General Public
 * License as published by the Free Software Foundation; either
 * version 2 of the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Library General Public License for more details.
 *
 * You should have received a copy of the GNU Library General Public
 * License along with this library; if not, write to the
 * Free Software Foundation, Inc., 51 Franklin St, Fifth Floor,
 * Boston, MA 02110-1301, USA.
 */

/**
 * See the AUTHORS file for a list of people on the Gamuza Team.
 * See the ChangeLog files for a list of changes.
 * These files are distributed with gamuza_desktop-magento at http://github.com/gamuzatech/.
 */

// enum TAccelFlags
{
    define ('accVisible', Gtk::ACCEL_VISIBLE);
    define ('accLocked',  Gtk::ACCEL_LOCKED);
    define ('accMask',    Gtk::ACCEL_MASK);
}

// enum TAnchorType
{
    define ('ancCenter',     Gtk::ANCHOR_CENTER);
    define ('ancNorth',      Gtk::ANCHOR_NORTH);
    define ('ancNorthWest',  Gtk::ANCHOR_NORTH_WEST);
    define ('ancNorthEast',  Gtk::ANCHOR_NORTH_EAST);
    define ('ancSourth',     Gtk::ANCHOR_SOUTH);
    define ('ancSouthWest',  Gtk::ANCHOR_SOUTH_WEST);
    define ('ancSouthEast',  Gtk::ANCHOR_SOUTH_EAST);
    define ('ancWest',       Gtk::ANCHOR_WEST);
    define ('ancEast',       Gtk::ANCHOR_EAST);
    define ('ancN',          Gtk::ANCHOR_N);
    define ('ancNW',         Gtk::ANCHOR_NW);
    define ('ancNE',         Gtk::ANCHOR_NE);
    define ('ancS',          Gtk::ANCHOR_S);
    define ('ancSW',         Gtk::ANCHOR_SW);
    define ('ancSE',         Gtk::ANCHOR_SE);
    define ('ancW',          Gtk::ANCHOR_W);
    define ('ancE',          Gtk::ANCHOR_E);
}

// enum TArgFlags
{
    define ('argReadable',      Gtk::ARG_READABLE);
    define ('argWritable',      Gtk::ARG_WRITABLE);
    define ('argConstruct',     Gtk::ARG_CONSTRUCT);
    define ('argConstructOnly', Gtk::ARG_CONSTRUCT_ONLY);
    define ('argChildArg',      Gtk::ARG_CHILD_ARG);
}

// enum TArrowType
{
    define ('arrUp',    Gtk::ARROW_UP);
    define ('arrDown',  Gtk::ARROW_DOWN);
    define ('arrLeft',  Gtk::ARROW_LEFT);
    define ('arrRight', Gtk::ARROW_RIGHT);
}

// enum TAssistantPageType
{
    define ('aspContent',  Gtk::ASSISTANT_PAGE_CONTENT);
    define ('aspIntro',    Gtk::ASSISTANT_PAGE_INTRO);
    define ('aspConfirm',  Gtk::ASSISTANT_PAGE_CONFIRM);
    define ('aspSummary',  Gtk::ASSISTANT_PAGE_SUMMARY);
    define ('aspProgress', Gtk::ASSISTANT_PAGE_PROGRESS);
}

// enum TAttachOptions
{
    define ('attExpand',  Gtk::EXPAND);
    define ('attShrink',  Gtk::SHRINK);
    define ('attFill',    Gtk::FILL);
    define ('attDefault', Gtk::EXPAND | Gtk::FILL);
}

// enum TButtonAction
{
    define ('btaIgnored', Gtk::BUTTON_IGNORED);
    define ('btaSelects', Gtk::BUTTON_SELECTS);
    define ('btaDrags',   Gtk::BUTTON_DRAGS);
    define ('btaExpands', Gtk::BUTTON_EXPANDS);
}

// enum TButtonBoxStyle
{
    define ('bbxDefaultStyle', Gtk::BUTTONBOX_DEFAULT_STYLE);
    define ('bbxSpread',       Gtk::BUTTONBOX_SPREAD);
    define ('bbxEdge',         Gtk::BUTTONBOX_EDGE);
    define ('bbxStart',        Gtk::BUTTONBOX_START);
    define ('bbxEnd',          Gtk::BUTTONBOX_END);
}

// enum TButtonsType
{
    define ('btnNone',     Gtk::BUTTONS_NONE);
    define ('btnOk',       Gtk::BUTTONS_OK);
    define ('btnClose',    Gtk::BUTTONS_CLOSE);
    define ('btnCancel',   Gtk::BUTTONS_CANCEL);
    define ('btnYesNo',    Gtk::BUTTONS_YES_NO);
    define ('btnOkCancel', Gtk::BUTTONS_OK_CANCEL);
    // custom
    define ('btnYes',      6 /* Gtk::BUTTONS_YES */);
    define ('btnNo',       7 /* Gtk::BUTTONS_NO) */);
}

// enum TCalendarDisplayOptions
{
    define ('calShowHeading',     Gtk::CALENDAR_SHOW_HEADING);
    define ('calShowDayNames',    Gtk::CALENDAR_SHOW_DAY_NAMES);
    define ('calNoMonthChange',   Gtk::CALENDAR_NO_MONTH_CHANGE);
    define ('calShowWeekNumbers', Gtk::CALENDAR_SHOW_WEEK_NUMBERS);
    define ('calWeekStartMonday', Gtk::CALENDAR_WEEK_START_MONDAY);
}

// enum TCellType
{
    define ('celEmpty',               Gtk::CELL_EMPTY);
    define ('celRendererSelected',    Gtk::CELL_RENDERER_SELECTED);
    define ('celRendererPrelit',      Gtk::CELL_RENDERER_PRELIT);
    define ('celPixtext',             Gtk::CELL_PIXTEXT);
    define ('celRendererInsensitive', Gtk::CELL_RENDERER_INSENSITIVE);
    define ('celRendererSorted',      Gtk::CELL_RENDERER_SORTED);
    define ('celRendererFocused',     Gtk::CELL_RENDERER_FOCUSED);
}

// enum TCornerType
{
    define ('crnTopLeft',     Gtk::CORNER_TOP_LEFT);
    define ('crnBottomLeft',  Gtk::CORNER_BOTTOM_LEFT);
    define ('crnTopRight',    Gtk::CORNER_TOP_RIGHT);
    define ('crnBottomRight', Gtk::CORNER_BOTTOM_RIGHT);
}

// enum TCurveType
{
    define ('crvLinear', Gtk::CURVE_TYPE_LINEAR);
    define ('crvSpline', Gtk::CURVE_TYPE_SPLINE);
    define ('crvFree',   Gtk::CURVE_TYPE_FREE);
}

// enum TDeleteType
{
    define ('delChars',           Gtk::DELETE_CHARS);
    define ('delWordEnds',        Gtk::DELETE_WORD_ENDS);
    define ('delWords',           Gtk::DELETE_WORDS);
    define ('delDisplayLines',    Gtk::DELETE_DISPLAY_LINES);
    define ('delDisplayLineEnds', Gtk::DELETE_DISPLAY_LINE_ENDS);
    define ('delParagraphEnds',   Gtk::DELETE_PARAGRAPH_ENDS);
    define ('delParagraphs',      Gtk::DELETE_PARAGRAPHS);
    define ('delWhitespace',      Gtk::DELETE_WHITESPACE);
}

// enum TDestDefaults
{
    define ('ddfMotion',    Gtk::DEST_DEFAULT_MOTION);
    define ('ddfHighlight', Gtk::DEST_DEFAULT_HIGHLIGHT);
    define ('ddfDrop',      Gtk::DEST_DEFAULT_DROP);
    define ('ddfAll',       Gtk::DEST_DEFAULT_ALL);
}

// enum TDialogFlags
{
    define ('dlgModal',             Gtk::DIALOG_MODAL);
    define ('dlgDestroyWithParent', Gtk::DIALOG_DESTROY_WITH_PARENT);
    define ('dlgNoSeparator',       Gtk::DIALOG_NO_SEPARATOR);
}

// enum TDirectionType
{
    define ('dirTabForward',  Gtk::DIR_TAB_FORWARD);
    define ('dirTabBackward', Gtk::DIR_TAB_BACKWARD);
    define ('dirUp',          Gtk::DIR_UP);
    define ('dirDown',        Gtk::DIR_DOWN);
    define ('dirLeft',        Gtk::DIR_LEFT);
    define ('dirRight',       Gtk::DIR_RIGHT);
}

// enum TExpanderStyle
{
    define ('expCollapsed',     Gtk::EXPANDER_COLLAPSED);
    define ('expSemiCollapsed', Gtk::EXPANDER_SEMI_COLLAPSED);
    define ('expSemiExpanded',  Gtk::EXPANDER_SEMI_EXPANDED);
    define ('expExpanded',      Gtk::EXPANDER_EXPANDED);
}

// enum TFileChooserError
{
    define ('fceNoExistent',  Gtk::FILE_CHOOSER_ERROR_NONEXISTENT);
    define ('fceBadFilename', Gtk::FILE_CHOOSER_ERROR_BAD_FILENAME);
}

// enum TFileChooserAction
{
    define ('fcaOpen',         Gtk::FILE_CHOOSER_ACTION_OPEN);
    define ('fcaSave',         Gtk::FILE_CHOOSER_ACTION_SAVE);
    define ('fcaSelectFolder', Gtk::FILE_CHOOSER_ACTION_SELECT_FOLDER);
    define ('fcaCreateFolder', Gtk::FILE_CHOOSER_ACTION_CREATE_FOLDER);
}

// enum TFileFilterFlags
{
    define ('fftFilename',    Gtk::FILE_FILTER_FILENAME);
    define ('fftUri',         Gtk::FILE_FILTER_URI);
    define ('fftDisplayName', Gtk::FILE_FILTER_DISPLAY_NAME);
    define ('fftMimeType',    Gtk::FILE_FILTER_MIME_TYPE);
}

// enum TIconLookupFlags
{
    define ('iclNoSvg',      Gtk::ICON_LOOKUP_NO_SVG);
    define ('iclForceSvg',   Gtk::ICON_LOOKUP_FORCE_SVG);
    define ('iclUseBuiltin', Gtk::ICON_LOOKUP_USE_BUILTIN);
}

// enum TIconThemeError
{
    define ('ictNotFound', Gtk::ICON_THEME_NOT_FOUND);
    define ('ictFailed',   Gtk::ICON_THEME_FAILED);
}

// enum TIconSize
{
   define ('icsInvalid',      Gtk::ICON_SIZE_INVALID);
   define ('icsMenu',         Gtk::ICON_SIZE_MENU);
   define ('icsSmallToolbar', Gtk::ICON_SIZE_SMALL_TOOLBAR);
   define ('icsLargeToolbar', Gtk::ICON_SIZE_LARGE_TOOLBAR);
   define ('icsButton',       Gtk::ICON_SIZE_BUTTON);
   define ('icsDND',          Gtk::ICON_SIZE_DND);
   define ('icsDialog',       Gtk::ICON_SIZE_DIALOG);
}

// enum TIMStatusStyle
{
    define ('imsNothing',  Gtk::IM_STATUS_NOTHING);
    define ('imsCallback', Gtk::IM_STATUS_CALLBACK);
    define ('imsNone',     Gtk::IM_STATUS_NONE);
}

// enum TImageType
{
    define ('imgEmpty',     Gtk::IMAGE_EMPTY);
    define ('imgPixmap',    Gtk::IMAGE_PIXMAP);
    define ('imgImage',     Gtk::IMAGE_IMAGE);
    define ('imgPixbuf',    Gtk::IMAGE_PIXBUF);
    define ('imgStock',     Gtk::IMAGE_STOCK);
    define ('imgIconSet',   Gtk::IMAGE_ICON_SET);
    define ('imgAnimation', Gtk::IMAGE_ANIMATION);
    define ('imgName',      Gtk::IMAGE_ICON_NAME);
}

// enum TJustification
{
    define ('jusLeft',   Gtk::JUSTIFY_LEFT);
    define ('jusRight',  Gtk::JUSTIFY_RIGHT);
    define ('jusCenter', Gtk::JUSTIFY_CENTER);
    define ('jusFill',   Gtk::JUSTIFY_FILL);
}

// enum TMatchType
{
    define ('mtcAll',     Gtk::MATCH_ALL);
    define ('mtcAllTail', Gtk::MATCH_ALL_TAIL);
    define ('mtcHead',    Gtk::MATCH_HEAD);
    define ('mtcTail',    Gtk::MATCH_TAIL);
    define ('mtcExact',   Gtk::MATCH_EXACT);
    define ('mtcLast',    Gtk::MATCH_LAST);
}

// enum TMenuDirectionType
{
    define ('mdrParent', Gtk::MENU_DIR_PARENT);
    define ('mdrChild',  Gtk::MENU_DIR_CHILD);
    define ('mdrNext',   Gtk::MENU_DIR_NEXT);
    define ('mdrPrev',   Gtk::MENU_DIR_PREV);
}

// enum TMessageType
{
    define ('msgInfo',     Gtk::MESSAGE_INFO);
    define ('msgWarning',  Gtk::MESSAGE_WARNING);
    define ('msgError',    Gtk::MESSAGE_ERROR);
    define ('msgQuestion', Gtk::MESSAGE_QUESTION);
}

// enum TMetricType
{
    define ('metPixels',      Gtk::PIXELS);
    define ('metInches',      Gtk::INCHES);
    define ('metCentimeters', Gtk::CENTIMETERS);
}

// enum TMovementStep
{
    define ('mvtLogicalPositions', Gtk::MOVEMENT_LOGICAL_POSITIONS);
    define ('mvtVisualPositions',  Gtk::MOVEMENT_VISUAL_POSITIONS);
    define ('mvtWords',            Gtk::MOVEMENT_WORDS);
    define ('mvtDisplayLines',     Gtk::MOVEMENT_DISPLAY_LINES);
    define ('mvtDisplayLineEnds',  Gtk::MOVEMENT_DISPLAY_LINE_ENDS);
    define ('mvtParagraphs',       Gtk::MOVEMENT_PARAGRAPHS);
    define ('mvtParagraphEnds',    Gtk::MOVEMENT_PARAGRAPH_ENDS);
    define ('mvtPages',            Gtk::MOVEMENT_PAGES);
    define ('mvtBufferEnds',       Gtk::MOVEMENT_BUFFER_ENDS);
    define ('mvtHorizontalPages',  Gtk::MOVEMENT_HORIZONTAL_PAGES);
}

// enum TObjectFlags
{
    define ('obfInDestruction', Gtk::IN_DESTRUCTION);
    define ('obfFloating',      Gtk::FLOATING);
    define ('obfReserved1',     Gtk::RESERVED_1);
    define ('obfReserved2',     Gtk::RESERVED_2);
}

// enum TOrientation
{
    define ('oriHorizontal', Gtk::ORIENTATION_HORIZONTAL);
    define ('oriVertical',   Gtk::ORIENTATION_VERTICAL);
}

// enum TObjectType
{
    define ('obtInvalid',   Gobject::TYPE_INVALID);
    define ('obtNone',      Gobject::TYPE_NONE);
    define ('obtInterface', Gobject::TYPE_INTERFACE);
    define ('obtChar',      Gobject::TYPE_CHAR);
    define ('obtBoolean',   Gobject::TYPE_BOOLEAN);
    define ('obtLong',      Gobject::TYPE_LONG);
    define ('obtEnum',      Gobject::TYPE_ENUM);
    define ('obtFlags',     Gobject::TYPE_FLAGS);
    define ('obtDouble',    Gobject::TYPE_DOUBLE);
    define ('obtString',    Gobject::TYPE_STRING);
    define ('obtPointer',   Gobject::TYPE_POINTER);
    define ('obtBoxed',     Gobject::TYPE_BOXED);
    define ('obtParam',     Gobject::TYPE_PARAM);
    define ('obtObject',    Gobject::TYPE_OBJECT);
    define ('obtPHPValue',  Gobject::TYPE_PHP_VALUE);
}

// enum TPackType
{
    define ('pckStart', Gtk::PACK_START);
    define ('pckEnd',   Gtk::PACK_END);
}

// enum TPathPriorityType
{
    define ('pprLowest',      Gtk::PATH_PRIO_LOWEST);
    define ('pprGtk',         Gtk::PATH_PRIO_GTK);
    define ('pprApplication', Gtk::PATH_PRIO_APPLICATION);
    define ('pprTheme',       Gtk::PATH_PRIO_THEME);
    define ('pprRc',          Gtk::PATH_PRIO_RC);
    define ('pprHighest',     Gtk::PATH_PRIO_HIGHEST);
}

// enum TPathType
{
    define ('pthWidget',      Gtk::PATH_WIDGET);
    define ('pthWidgetClass', Gtk::PATH_WIDGET_CLASS);
    define ('pthClass',       Gtk::PATH_CLASS);
}

// enum TPolicyType
{
    define ('polAlways',    Gtk::POLICY_ALWAYS);
    define ('polAutomatic', Gtk::POLICY_AUTOMATIC);
    define ('polNever',     Gtk::POLICY_NEVER);
}

// enum TPositionType
{
    define ('posLeft',   Gtk::POS_LEFT);
    define ('posRight',  Gtk::POS_RIGHT);
    define ('posTop',    Gtk::POS_TOP);
    define ('posBottom', Gtk::POS_BOTTOM);
}

// enum TPreviewType
{
    define ('pvwColor',     Gtk::PREVIEW_COLOR);
    define ('pvwGrayscale', Gtk::PREVIEW_GRAYSCALE);
}

// enum TProgressBarStyle
{
    define ('prgContinuous', Gtk::PROGRESS_CONTINUOUS);
    define ('prgDiscrete',   Gtk::PROGRESS_DISCRETE);
}

// enum TProgressBarOrientation
{
    define ('prbLeftToRight', Gtk::PROGRESS_LEFT_TO_RIGHT);
    define ('prbRightToLeft', Gtk::PROGRESS_RIGHT_TO_LEFT);
    define ('prbBottomToTop', Gtk::PROGRESS_BOTTOM_TO_TOP);
    define ('prbTopToBottom', Gtk::PROGRESS_TOP_TO_BOTTOM);
}

// enum TRcFlags
{
    define ('rcFg',   Gtk::RC_FG);
    define ('rcBg',   Gtk::RC_BG);
    define ('rcText', Gtk::RC_TEXT);
    define ('rcBase', Gtk::RC_BASE);
}

// enum TRcTokenType
{
    define ('rcTokenInvalid',      Gtk::RC_TOKEN_INVALID);
    define ('rcTokenInclude',      Gtk::RC_TOKEN_INCLUDE);
    define ('rcTokenNormal',       Gtk::RC_TOKEN_NORMAL);
    define ('rctokenActive',       Gtk::RC_TOKEN_ACTIVE);
    define ('rcTokenPrelight',     Gtk::RC_TOKEN_PRELIGHT);
    define ('rcTokenSelected',     Gtk::RC_TOKEN_SELECTED);
    define ('rcTokenInsensitive',  Gtk::RC_TOKEN_INSENSITIVE);
    define ('rctokenFg',           Gtk::RC_TOKEN_FG);
    define ('rcTokenBg',           Gtk::RC_TOKEN_BG);
    define ('rcTokenText',         Gtk::RC_TOKEN_TEXT);
    define ('rcTokenBase',         Gtk::RC_TOKEN_BASE);
    define ('rcTokenXThickness',   Gtk::RC_TOKEN_XTHICKNESS);
    define ('rcTokenYThickness',   Gtk::RC_TOKEN_YTHICKNESS);
    define ('rcTokenFont',         Gtk::RC_TOKEN_FONT);
    define ('rcTokenFontSet',      Gtk::RC_TOKEN_FONTSET);
    define ('rcTokenFontName',     Gtk::RC_TOKEN_FONT_NAME);
    define ('rcTokenBgPixmap',     Gtk::RC_TOKEN_BG_PIXMAP);
    define ('rcTokenPixmapPath',   Gtk::RC_TOKEN_PIXMAP_PATH);
    define ('rcTokenStyle',        Gtk::RC_TOKEN_STYLE);
    define ('rcTokenBinding',      Gtk::RC_TOKEN_BINDING);
    define ('rcTokenBind',         Gtk::RC_TOKEN_BIND);
    define ('rcTokenWidget',       Gtk::RC_TOKEN_WIDGET);
    define ('rcTokenWidgetClass',  Gtk::RC_TOKEN_WIDGET_CLASS);
    define ('rcTokenClass',        Gtk::RC_TOKEN_CLASS);
    define ('rcTokenLowest',       Gtk::RC_TOKEN_LOWEST);
    define ('rcTokenGtk',          Gtk::RC_TOKEN_GTK);
    define ('rcTokenApplication',  Gtk::RC_TOKEN_APPLICATION);
    define ('rcTokenTheme',        Gtk::RC_TOKEN_THEME);
    define ('rcTokenRc',           Gtk::RC_TOKEN_RC);
    define ('rcTokenHighest',      Gtk::RC_TOKEN_HIGHEST);
    define ('rcTokenEngine',       Gtk::RC_TOKEN_ENGINE);
    define ('rcTokenModulePath',   Gtk::RC_TOKEN_MODULE_PATH);
    define ('rcTokenIMModulePath', Gtk::RC_TOKEN_IM_MODULE_PATH);
    define ('rcTokenIMModuleFile', Gtk::RC_TOKEN_IM_MODULE_FILE);
    define ('rcTokenStock',        Gtk::RC_TOKEN_STOCK);
    define ('rcTokenLtr',          Gtk::RC_TOKEN_LTR);
    define ('rcTokenRtl',          Gtk::RC_TOKEN_RTL);
    define ('rcTokenLast',         Gtk::RC_TOKEN_LAST);
    define ('rcStyle',             Gtk::RC_STYLE);
}

// enum TReliefStyle
{
    define ('relNormal', Gtk::RELIEF_NORMAL);
    define ('relHalf',   Gtk::RELIEF_HALF);
    define ('relNone',   Gtk::RELIEF_NONE);
}

// enum TResizeMode
{
    define ('rszParent',    Gtk::RESIZE_PARENT);
    define ('rszQueue',     Gtk::RESIZE_QUEUE);
    define ('rszImmediate', Gtk::RESIZE_IMMEDIATE);
}

// enum TResponseType
{
    define ('resHelp',        Gtk::RESPONSE_HELP);
    define ('resApply',       Gtk::RESPONSE_APPLY);
    define ('resNo',          Gtk::RESPONSE_NO);
    define ('resYes',         Gtk::RESPONSE_YES);
    define ('resClose',       Gtk::RESPONSE_CLOSE);
    define ('resCancel',      Gtk::RESPONSE_CANCEL);
    define ('resOk',          Gtk::RESPONSE_OK);
    define ('resDeleteEvent', Gtk::RESPONSE_DELETE_EVENT);
    define ('resAccept',      Gtk::RESPONSE_ACCEPT);
    define ('resReject',      Gtk::RESPONSE_REJECT);
    define ('resNone',        Gtk::RESPONSE_NONE);
}

// enum TScrollType
{
    define ('scrNone',         Gtk::SCROLL_NONE);
    define ('scrJump',         Gtk::SCROLL_JUMP);
    define ('scrStepBackward', Gtk::SCROLL_STEP_BACKWARD);
    define ('scrStepForward',  Gtk::SCROLL_STEP_FORWARD);
    define ('scrPageBackward', Gtk::SCROLL_PAGE_BACKWARD);
    define ('scrPageForward',  Gtk::SCROLL_PAGE_FORWARD);
    define ('scrStepUp',       Gtk::SCROLL_STEP_UP);
    define ('scrStepDown',     Gtk::SCROLL_STEP_DOWN);
    define ('scrPageUp',       Gtk::SCROLL_PAGE_UP);
    define ('scrPageDown',     Gtk::SCROLL_PAGE_DOWN);
    define ('scrStepLeft',     Gtk::SCROLL_STEP_LEFT);
    define ('scrStepRight',    Gtk::SCROLL_STEP_RIGHT);
    define ('scrpageLeft',     Gtk::SCROLL_PAGE_LEFT);
    define ('scrPageRight',    Gtk::SCROLL_PAGE_RIGHT);
    define ('scrStart',        Gtk::SCROLL_START);
    define ('scrEnd',          Gtk::SCROLL_END);
}

// enum TSelectionMode
{
    define ('selNone',     Gtk::SELECTION_NONE);
    define ('selSingle',   Gtk::SELECTION_SINGLE);
    define ('selBrowse',   Gtk::SELECTION_BROWSE);
    define ('selMultiple', Gtk::SELECTION_MULTIPLE);
}

// enum TShadowType
{
    define ('shaNone',      Gtk::SHADOW_NONE);
    define ('shaIn',        Gtk::SHADOW_IN);
    define ('shaOut',       Gtk::SHADOW_OUT);
    define ('shaEtchedIn',  Gtk::SHADOW_ETCHED_IN);
    define ('shaEtchedOut', Gtk::SHADOW_ETCHED_OUT);
}

// enum TSideType
{
    define ('sidTop',    Gtk::SIDE_TOP);
    define ('sidBottom', Gtk::SIDE_BOTTOM);
    define ('sidLeft',   Gtk::SIDE_LEFT);
    define ('sidRight',  Gtk::SIDE_RIGHT);
}

// enum TSideGroupMode
{
    define ('sigNone',       Gtk::SIZE_GROUP_NONE);
    define ('sigHorizontal', Gtk::SIZE_GROUP_HORIZONTAL);
    define ('sigVertical',   Gtk::SIZE_GROUP_VERTICAL);
    define ('sigBoth',       Gtk::SIZE_GROUP_BOTH);
}

// enum TSortType
{
    define ('srtAscending',  Gtk::SORT_ASCENDING);
    define ('srtDescending', Gtk::SORT_DESCENDING);
}

// enum TSpinType
{
    define ('spnStepForward',  Gtk::SPIN_STEP_FORWARD);
    define ('spnStepBackward', Gtk::SPIN_STEP_BACKWARD);
    define ('spnPageForward',  Gtk::SPIN_PAGE_FORWARD);
    define ('spnPageBackward', Gtk::SPIN_PAGE_BACKWARD);
    define ('spnHome',         Gtk::SPIN_HOME);
    define ('spnEnd',          Gtk::SPIN_END);
    define ('spnUserDefined',  Gtk::SPIN_USER_DEFINED);
}

// enum TStateType
{
    define ('sttNormal',      Gtk::STATE_NORMAL);
    define ('sttActive',      Gtk::STATE_ACTIVE);
    define ('sttPrelight',    Gtk::STATE_PRELIGHT);
    define ('sttSelected',    Gtk::STATE_SELECTED);
    define ('sttInsensitive', Gtk::STATE_INSENSITIVE);
}

// enum TStockItems
{
    define ('siAbout',                Gtk::STOCK_ABOUT);
    define ('siAdd',                  Gtk::STOCK_ADD);
    define ('siApply',                Gtk::STOCK_APPLY);
    define ('siBold',                 Gtk::STOCK_BOLD);
    define ('siCancel',               Gtk::STOCK_CANCEL);
    define ('siCdrom',                Gtk::STOCK_CDROM);
    define ('siClear',                Gtk::STOCK_CLEAR);
    define ('siClose',                Gtk::STOCK_CLOSE);
    define ('siColorPicker',          Gtk::STOCK_COLOR_PICKER);
    define ('siConnect',              Gtk::STOCK_CONNECT);
    define ('siConvert',              Gtk::STOCK_CONVERT);
    define ('siCopy',                 Gtk::STOCK_COPY);
    define ('siCut',                  Gtk::STOCK_CUT);
    define ('siDelete',               Gtk::STOCK_DELETE);
    define ('siDialogAuthentication', Gtk::STOCK_DIALOG_AUTHENTICATION);
    define ('siDialogError',          Gtk::STOCK_DIALOG_ERROR);
    define ('siDialogInfo',           Gtk::STOCK_DIALOG_INFO);
    define ('siDialogQuestion',       Gtk::STOCK_DIALOG_QUESTION);
    define ('siDialogWarning',        Gtk::STOCK_DIALOG_WARNING);
    define ('siDirectory',            Gtk::STOCK_DIRECTORY);
    define ('siDisconnect',           Gtk::STOCK_DISCONNECT);
    define ('siDnd',                  Gtk::STOCK_DND);
    define ('siDndMultiple',          Gtk::STOCK_DND_MULTIPLE);
    define ('siEdit',                 Gtk::STOCK_EDIT);
    define ('siExecute',              Gtk::STOCK_EXECUTE);
    define ('siFile',                 Gtk::STOCK_FILE);
    define ('siFind',                 Gtk::STOCK_FIND);
    define ('siFindAndreplace',       Gtk::STOCK_FIND_AND_REPLACE);
    define ('siFloppy',               Gtk::STOCK_FLOPPY);
    define ('siGoBack',               Gtk::STOCK_GO_BACK);
    define ('siGoDown',               Gtk::STOCK_GO_DOWN);
    define ('siGoForward',            Gtk::STOCK_GO_FORWARD);
    define ('siGoUp',                 Gtk::STOCK_GO_UP);
    define ('siGotoBottom',           Gtk::STOCK_GOTO_BOTTOM);
    define ('siGotoFirst',            Gtk::STOCK_GOTO_FIRST);
    define ('siGotoLast',             Gtk::STOCK_GOTO_LAST);
    define ('siGotoTop',              Gtk::STOCK_GOTO_TOP);
    define ('siHarddisk',             Gtk::STOCK_HARDDISK);
    define ('siHelp',                 Gtk::STOCK_HELP);
    define ('siHome',                 Gtk::STOCK_HOME);
    define ('siIndent',               Gtk::STOCK_INDENT);
    define ('siIndex',                Gtk::STOCK_INDEX);
    define ('siItalic',               Gtk::STOCK_ITALIC);
    define ('siJumpTo',               Gtk::STOCK_JUMP_TO);
    define ('siJustifyCenter',        Gtk::STOCK_JUSTIFY_CENTER);
    define ('siJustifyFill',          Gtk::STOCK_JUSTIFY_FILL);
    define ('siJustifyLeft',          Gtk::STOCK_JUSTIFY_LEFT);
    define ('siJustifyRight',         Gtk::STOCK_JUSTIFY_RIGHT);
    define ('siMediaForward',         Gtk::STOCK_MEDIA_FORWARD);
    define ('siMediaNext',            Gtk::STOCK_MEDIA_NEXT);
    define ('siMediaPause',           Gtk::STOCK_MEDIA_PAUSE);
    define ('siMediaPlay',            Gtk::STOCK_MEDIA_PLAY);
    define ('siMediaPrevious',        Gtk::STOCK_MEDIA_PREVIOUS);
    define ('siMediaRecord',          Gtk::STOCK_MEDIA_RECORD);
    define ('siMediaRewind',          Gtk::STOCK_MEDIA_REWIND);
    define ('siMediaStop',            Gtk::STOCK_MEDIA_STOP);
    define ('siMissingImage',         Gtk::STOCK_MISSING_IMAGE);
    define ('siNetwork',              Gtk::STOCK_NETWORK);
    define ('siNew',                  Gtk::STOCK_NEW);
    define ('siNo',                   Gtk::STOCK_NO);
    define ('siOk',                   Gtk::STOCK_OK);
    define ('siOpen',                 Gtk::STOCK_OPEN);
    define ('siPaste',                Gtk::STOCK_PASTE);
    define ('siPreferences',          Gtk::STOCK_PREFERENCES);
    define ('siPrint',                Gtk::STOCK_PRINT);
    define ('siPrintPreview',         Gtk::STOCK_PRINT_PREVIEW);
    define ('siProperties',           Gtk::STOCK_PROPERTIES);
    define ('siQuit',                 Gtk::STOCK_QUIT);
    define ('siRedo',                 Gtk::STOCK_REDO);
    define ('siRefresh',              Gtk::STOCK_REFRESH);
    define ('siRemove',               Gtk::STOCK_REMOVE);
    define ('siRevertTosaved',        Gtk::STOCK_REVERT_TO_SAVED);
    define ('siSave',                 Gtk::STOCK_SAVE);
    define ('siSaveAs',               Gtk::STOCK_SAVE_AS);
    define ('siSelectColor',          Gtk::STOCK_SELECT_COLOR);
    define ('siSelectFont',           Gtk::STOCK_SELECT_FONT);
    define ('siSortAscending',        Gtk::STOCK_SORT_ASCENDING);
    define ('siSortDescending',       Gtk::STOCK_SORT_DESCENDING);
    define ('siSpellCheck',           Gtk::STOCK_SPELL_CHECK);
    define ('siStop',                 Gtk::STOCK_STOP);
    define ('siStrikethrough',        Gtk::STOCK_STRIKETHROUGH);
    define ('siUndelete',             Gtk::STOCK_UNDELETE);
    define ('siUnderline',            Gtk::STOCK_UNDERLINE);
    define ('siUndo',                 Gtk::STOCK_UNDO);
    define ('siUnindent',             Gtk::STOCK_UNINDENT);
    define ('siYes',                  Gtk::STOCK_YES);
    define ('siZoom100',              Gtk::STOCK_ZOOM_100);
    define ('siZoomFit',              Gtk::STOCK_ZOOM_FIT);
    define ('siZoomIn',               Gtk::STOCK_ZOOM_IN);
    define ('siZoomOut',              Gtk::STOCK_ZOOM_OUT);
}

// enum TSubmenuDirection
{
    define ('smdLeft',  Gtk::DIRECTION_LEFT);
    define ('smdRight', Gtk::DIRECTION_RIGHT);
}

// enum TSubmenuPlacement
{
    define ('smpBottom', Gtk::TOP_BOTTOM);
    define ('smpRight',  Gtk::LEFT_RIGHT);
}

// enum TTargetFlags
{
    define ('tgtSameApp', Gtk::TARGET_SAME_APP);
    define ('tgtWidget',  Gtk::TARGET_SAME_WIDGET);
}

// enum TTextWindowType
{
    define ('txtWindowPrivate',     Gtk::TEXT_WINDOW_PRIVATE);
    define ('txtSearchVisibleOnly', Gtk::TEXT_SEARCH_VISIBLE_ONLY);
    define ('txtSearchTextOnly',    Gtk::TEXT_SEARCH_TEXT_ONLY);
    define ('txtWindowLeft',        Gtk::TEXT_WINDOW_LEFT);
    define ('txtWindowRight',       Gtk::TEXT_WINDOW_RIGHT);
    define ('txtWindowTop',         Gtk::TEXT_WINDOW_TOP);
    define ('txtWindowBottom',      Gtk::TEXT_WINDOW_BOTTOM);
}

// enum TToolbarStyle
{
    define ('tbrIcons',     Gtk::TOOLBAR_ICONS);
    define ('tbrText',      Gtk::TOOLBAR_TEXT);
    define ('tbrBoth',      Gtk::TOOLBAR_BOTH);
    define ('tbrBothHoriz', Gtk::TOOLBAR_BOTH_HORIZ);
}

// enum TTreeModelFlags
{
    define ('trmItersPersist', Gtk::TREE_MODEL_ITERS_PERSIST);
    define ('trmListOnly',     Gtk::TREE_MODEL_LIST_ONLY);
}

// enum TTreeViewColumnAttributes
{
    define ('tvcText',   'text');
    define ('tvcPixbuf', 'pixbuf');
    define ('tvcActive', 'active');
    define ('tvcValue',  'value');
}

// enum TTreeViewColumnSizing
{
    define ('tvcGrowOnly', Gtk::TREE_VIEW_COLUMN_GROW_ONLY);
    define ('tvcAutosize', Gtk::TREE_VIEW_COLUMN_AUTOSIZE);
    define ('tvcFixed',    Gtk::TREE_VIEW_COLUMN_FIXED);
}

// enum TTreeViewColumnMode
{
    define ('tvcLine', Gtk::TREE_VIEW_LINE);
    define ('tvcItem', Gtk::TREE_VIEW_ITEM);
}

// enum TTreeViewDropPosition
{
    define ('tvdBefore',       Gtk::TREE_VIEW_DROP_BEFORE);
    define ('tvdAfter',        Gtk::TREE_VIEW_DROP_AFTER);
    define ('tvdIntoOrBefore', Gtk::TREE_VIEW_DROP_INTO_OR_BEFORE);
    define ('tvdIntoOrAfter',  Gtk::TREE_VIEW_DROP_INTO_OR_AFTER);
}

// enum TTreeViewGridLines
{
    define ('tvglNone',       Gtk::TREE_VIEW_GRID_LINES_NONE);
    define ('tvglHorizontal', Gtk::TREE_VIEW_GRID_LINES_HORIZONTAL);
    define ('tvglVertical',   Gtk::TREE_VIEW_GRID_LINES_VERTICAL);
    define ('tvglBoth',       Gtk::TREE_VIEW_GRID_LINES_BOTH);
}

// enum TUIManagerItemType
{
    define ('uimAuto',        Gtk::UI_MANAGER_AUTO);
    define ('uimMenubar',     Gtk::UI_MANAGER_MENUBAR);
    define ('uimMenu',        Gtk::UI_MANAGER_MENU);
    define ('uimToolbar',     Gtk::UI_MANAGER_TOOLBAR);
    define ('uimPlaceHolder', Gtk::UI_MANAGER_PLACEHOLDER);
    define ('uimPopup',       Gtk::UI_MANAGER_POPUP);
    define ('uimMenuItem',    Gtk::UI_MANAGER_MENUITEM);
    define ('uimToolItem',    Gtk::UI_MANAGER_TOOLITEM);
    define ('uimSeparator',   Gtk::UI_MANAGER_SEPARATOR);
    define ('uimAccelerator', Gtk::UI_MANAGER_ACCELERATOR);
}

// enum TUpdateType
{
    define ('updContinuous',   Gtk::UPDATE_CONTINUOUS);
    define ('updDiscontinuos', Gtk::UPDATE_DISCONTINUOUS);
    define ('updDelayed',      Gtk::UPDATE_DELAYED);
}

// enum TVisiblity
{
    define ('visNone',    Gtk::VISIBILITY_NONE);
    define ('visPartial', Gtk::VISIBILITY_PARTIAL);
    define ('visFull',    Gtk::VISIBILITY_FULL);
}

// enum TWidgetHelpType
{
    define ('whlTooltip',   Gtk::WIDGET_HELP_TOOLTIP);
    define ('whlWhatsThis', Gtk::WIDGET_HELP_WHATS_THIS);
}

// enum TWindowPosition
{
    define ('wpsNone',           Gtk::WIN_POS_NONE);
    define ('wpsCenter',         Gtk::WIN_POS_CENTER);
    define ('wpsPosMouse',       Gtk::WIN_POS_MOUSE);
    define ('wpsCenterAlways',   Gtk::WIN_POS_CENTER_ALWAYS);
    define ('wpsCenterOnParent', Gtk::WIN_POS_CENTER_ON_PARENT);
}

// enum TWindowType
{
    define ('wndToplevel', Gtk::WINDOW_TOPLEVEL);
    define ('wndPopup',    Gtk::WINDOW_POPUP);
}

// enum TWrapMode
{
    define ('wrpNone',     Gtk::WRAP_NONE);
    define ('wrpChar',     Gtk::WRAP_CHAR);
    define ('wrpWord',     Gtk::WRAP_WORD);
    define ('wrpWordChar', Gtk::WRAP_WORD_CHAR);
}

