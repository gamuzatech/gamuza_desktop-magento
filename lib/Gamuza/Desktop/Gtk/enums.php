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

abstract class TAccelFlags
{
    const accVisible = Gtk::ACCEL_VISIBLE;
    const accLocked  = Gtk::ACCEL_LOCKED;
    const accMask    = Gtk::ACCEL_MASK;
}

abstract class TAnchorType
{
    const ancCenter    = Gtk::ANCHOR_CENTER;
    const ancNorth     = Gtk::ANCHOR_NORTH;
    const ancNorthWest = Gtk::ANCHOR_NORTH_WEST;
    const ancNorthEast = Gtk::ANCHOR_NORTH_EAST;
    const ancSourth    = Gtk::ANCHOR_SOUTH;
    const ancSouthWest = Gtk::ANCHOR_SOUTH_WEST;
    const ancSouthEast = Gtk::ANCHOR_SOUTH_EAST;
    const ancWest      = Gtk::ANCHOR_WEST;
    const ancEast      = Gtk::ANCHOR_EAST;
    const ancN         = Gtk::ANCHOR_N;
    const ancNW        = Gtk::ANCHOR_NW;
    const ancNE        = Gtk::ANCHOR_NE;
    const ancS         = Gtk::ANCHOR_S;
    const ancSW        = Gtk::ANCHOR_SW;
    const ancSE        = Gtk::ANCHOR_SE;
    const ancW         = Gtk::ANCHOR_W;
    const ancE         = Gtk::ANCHOR_E;
}

abstract class TArgFlags
{
    const argReadable      = Gtk::ARG_READABLE;
    const argWritable      = Gtk::ARG_WRITABLE;
    const argConstruct     = Gtk::ARG_CONSTRUCT;
    const argConstructOnly = Gtk::ARG_CONSTRUCT_ONLY;
    const argChildArg      = Gtk::ARG_CHILD_ARG;
}

abstract class TArrowType
{
    const arrUp    = Gtk::ARROW_UP;
    const arrDown  = Gtk::ARROW_DOWN;
    const arrLeft  = Gtk::ARROW_LEFT;
    const arrRight = Gtk::ARROW_RIGHT;
}

abstract class TAssistantPageType
{
    const aspContent  = Gtk::ASSISTANT_PAGE_CONTENT;
    const aspIntro    = Gtk::ASSISTANT_PAGE_INTRO;
    const aspConfirm  = Gtk::ASSISTANT_PAGE_CONFIRM;
    const aspSummary  = Gtk::ASSISTANT_PAGE_SUMMARY;
    const aspProgress = Gtk::ASSISTANT_PAGE_PROGRESS;
}

abstract class TAttachOptions
{
    const attExpand  = Gtk::EXPAND;
    const attShrink  = Gtk::SHRINK;
    const attFill    = Gtk::FILL;
    // custom
    const attDefault = 5 /* Gtk::EXPAND | Gtk::FILL */;
}

abstract class TButtonAction
{
    const btaIgnored = Gtk::BUTTON_IGNORED;
    const btaSelects = Gtk::BUTTON_SELECTS;
    const btaDrags   = Gtk::BUTTON_DRAGS;
    const btaExpands = Gtk::BUTTON_EXPANDS;
}

abstract class TButtonBoxStyle
{
    const bbxDefaultStyle = Gtk::BUTTONBOX_DEFAULT_STYLE;
    const bbxSpread       = Gtk::BUTTONBOX_SPREAD;
    const bbxEdge         = Gtk::BUTTONBOX_EDGE;
    const bbxStart        = Gtk::BUTTONBOX_START;
    const bbxEnd          = Gtk::BUTTONBOX_END;
}

abstract class TButtonsType
{
    const btnNone     = Gtk::BUTTONS_NONE;
    const btnOk       = Gtk::BUTTONS_OK;
    const btnClose    = Gtk::BUTTONS_CLOSE;
    const btnCancel   = Gtk::BUTTONS_CANCEL;
    const btnYesNo    = Gtk::BUTTONS_YES_NO;
    const btnOkCancel = Gtk::BUTTONS_OK_CANCEL;
    // custom
    const btnYes      = 6 /* Gtk::BUTTONS_YES */;
    const btnNo       = 7 /* Gtk::BUTTONS_NO) */;
}

abstract class TCalendarDisplayOptions
{
    const calShowHeading     = Gtk::CALENDAR_SHOW_HEADING;
    const calShowDayNames    = Gtk::CALENDAR_SHOW_DAY_NAMES;
    const calNoMonthChange   = Gtk::CALENDAR_NO_MONTH_CHANGE;
    const calShowWeekNumbers = Gtk::CALENDAR_SHOW_WEEK_NUMBERS;
    const calWeekStartMonday = Gtk::CALENDAR_WEEK_START_MONDAY;
}

abstract class TCellType
{
    const celEmpty               = Gtk::CELL_EMPTY;
    const celRendererSelected    = Gtk::CELL_RENDERER_SELECTED;
    const celRendererPrelit      = Gtk::CELL_RENDERER_PRELIT;
    const celPixtext             = Gtk::CELL_PIXTEXT;
    const celRendererInsensitive = Gtk::CELL_RENDERER_INSENSITIVE;
    const celRendererSorted      = Gtk::CELL_RENDERER_SORTED;
    const celRendererFocused     = Gtk::CELL_RENDERER_FOCUSED;
}

abstract class TCornerType
{
    const crnTopLeft     = Gtk::CORNER_TOP_LEFT;
    const crnBottomLeft  = Gtk::CORNER_BOTTOM_LEFT;
    const crnTopRight    = Gtk::CORNER_TOP_RIGHT;
    const crnBottomRight = Gtk::CORNER_BOTTOM_RIGHT;
}

abstract class TCurveType
{
    const crvLinear = Gtk::CURVE_TYPE_LINEAR;
    const crvSpline = Gtk::CURVE_TYPE_SPLINE;
    const crvFree   = Gtk::CURVE_TYPE_FREE;
}

abstract class TDeleteType
{
    const delChars           = Gtk::DELETE_CHARS;
    const delWordEnds        = Gtk::DELETE_WORD_ENDS;
    const delWords           = Gtk::DELETE_WORDS;
    const delDisplayLines    = Gtk::DELETE_DISPLAY_LINES;
    const delDisplayLineEnds = Gtk::DELETE_DISPLAY_LINE_ENDS;
    const delParagraphEnds   = Gtk::DELETE_PARAGRAPH_ENDS;
    const delParagraphs      = Gtk::DELETE_PARAGRAPHS;
    const delWhitespace      = Gtk::DELETE_WHITESPACE;
}

abstract class TDestDefaults
{
    const ddfMotion    = Gtk::DEST_DEFAULT_MOTION;
    const ddfHighlight = Gtk::DEST_DEFAULT_HIGHLIGHT;
    const ddfDrop      = Gtk::DEST_DEFAULT_DROP;
    const ddfAll       = Gtk::DEST_DEFAULT_ALL;
}

abstract class TDialogFlags
{
    const dlgModal             = Gtk::DIALOG_MODAL;
    const dlgDestroyWithParent = Gtk::DIALOG_DESTROY_WITH_PARENT;
    const dlgNoSeparator       = Gtk::DIALOG_NO_SEPARATOR;
}

abstract class TDirectionType
{
    const dirTabForward  = Gtk::DIR_TAB_FORWARD;
    const dirTabBackward = Gtk::DIR_TAB_BACKWARD;
    const dirUp          = Gtk::DIR_UP;
    const dirDown        = Gtk::DIR_DOWN;
    const dirLeft        = Gtk::DIR_LEFT;
    const dirRight       = Gtk::DIR_RIGHT;
}

abstract class TExpanderStyle
{
    const expCollapsed     = Gtk::EXPANDER_COLLAPSED;
    const expSemiCollapsed = Gtk::EXPANDER_SEMI_COLLAPSED;
    const expSemiExpanded  = Gtk::EXPANDER_SEMI_EXPANDED;
    const expExpanded      = Gtk::EXPANDER_EXPANDED;
}

abstract class TFileChooserError
{
    const fceNoExistent  = Gtk::FILE_CHOOSER_ERROR_NONEXISTENT;
    const fceBadFilename = Gtk::FILE_CHOOSER_ERROR_BAD_FILENAME;
}

abstract class TFileChooserAction
{
    const fcaOpen         = Gtk::FILE_CHOOSER_ACTION_OPEN;
    const fcaSave         = Gtk::FILE_CHOOSER_ACTION_SAVE;
    const fcaSelectFolder = Gtk::FILE_CHOOSER_ACTION_SELECT_FOLDER;
    const fcaCreateFolder = Gtk::FILE_CHOOSER_ACTION_CREATE_FOLDER;
}

abstract class TFileFilterFlags
{
    const fftFilename    = Gtk::FILE_FILTER_FILENAME;
    const fftUri         = Gtk::FILE_FILTER_URI;
    const fftDisplayName = Gtk::FILE_FILTER_DISPLAY_NAME;
    const fftMimeType    = Gtk::FILE_FILTER_MIME_TYPE;
}

abstract class TIconLookupFlags
{
    const iclNoSvg      = Gtk::ICON_LOOKUP_NO_SVG;
    const iclForceSvg   = Gtk::ICON_LOOKUP_FORCE_SVG;
    const iclUseBuiltin = Gtk::ICON_LOOKUP_USE_BUILTIN;
}

abstract class TIconThemeError
{
    const ictNotFound = Gtk::ICON_THEME_NOT_FOUND;
    const ictFailed   = Gtk::ICON_THEME_FAILED;
}

abstract class TIconSize
{
    const icsInvalid      = Gtk::ICON_SIZE_INVALID;
    const icsMenu         = Gtk::ICON_SIZE_MENU;
    const icsSmallToolbar = Gtk::ICON_SIZE_SMALL_TOOLBAR;
    const icsLargeToolbar = Gtk::ICON_SIZE_LARGE_TOOLBAR;
    const icsButton       = Gtk::ICON_SIZE_BUTTON;
    const icsDND          = Gtk::ICON_SIZE_DND;
    const icsDialog       = Gtk::ICON_SIZE_DIALOG;
}

abstract class TIMStatusStyle
{
    const imsNothing  = Gtk::IM_STATUS_NOTHING;
    const imsCallback = Gtk::IM_STATUS_CALLBACK;
    const imsNone     = Gtk::IM_STATUS_NONE;
}

abstract class TImageType
{
    const imgEmpty     = Gtk::IMAGE_EMPTY;
    const imgPixmap    = Gtk::IMAGE_PIXMAP;
    const imgImage     = Gtk::IMAGE_IMAGE;
    const imgPixbuf    = Gtk::IMAGE_PIXBUF;
    const imgStock     = Gtk::IMAGE_STOCK;
    const imgIconSet   = Gtk::IMAGE_ICON_SET;
    const imgAnimation = Gtk::IMAGE_ANIMATION;
    const imgName      = Gtk::IMAGE_ICON_NAME;
}

abstract class TJustification
{
    const jusLeft   = Gtk::JUSTIFY_LEFT;
    const jusRight  = Gtk::JUSTIFY_RIGHT;
    const jusCenter = Gtk::JUSTIFY_CENTER;
    const jusFill   = Gtk::JUSTIFY_FILL;
}

abstract class TMatchType
{
    const mtcAll     = Gtk::MATCH_ALL;
    const mtcAllTail = Gtk::MATCH_ALL_TAIL;
    const mtcHead    = Gtk::MATCH_HEAD;
    const mtcTail    = Gtk::MATCH_TAIL;
    const mtcExact   = Gtk::MATCH_EXACT;
    const mtcLast    = Gtk::MATCH_LAST;
}

abstract class TMenuDirectionType
{
    const mdrParent = Gtk::MENU_DIR_PARENT;
    const mdrChild  = Gtk::MENU_DIR_CHILD;
    const mdrNext   = Gtk::MENU_DIR_NEXT;
    const mdrPrev   = Gtk::MENU_DIR_PREV;
}

abstract class TMessageType
{
    const msgInfo     = Gtk::MESSAGE_INFO;
    const msgWarning  = Gtk::MESSAGE_WARNING;
    const msgError    = Gtk::MESSAGE_ERROR;
    const msgQuestion = Gtk::MESSAGE_QUESTION;
}

abstract class TMetricType
{
    const mtrPixels      = Gtk::PIXELS;
    const mtrInches      = Gtk::INCHES;
    const mtrCentimeters = Gtk::CENTIMETERS;
}

abstract class TMovementStep
{
    const mvtLogicalPositions = Gtk::MOVEMENT_LOGICAL_POSITIONS;
    const mvtVisualPositions  = Gtk::MOVEMENT_VISUAL_POSITIONS;
    const mvtWords            = Gtk::MOVEMENT_WORDS;
    const mvtDisplayLines     = Gtk::MOVEMENT_DISPLAY_LINES;
    const mvtDisplayLineEnds  = Gtk::MOVEMENT_DISPLAY_LINE_ENDS;
    const mvtParagraphs       = Gtk::MOVEMENT_PARAGRAPHS;
    const mvtParagraphEnds    = Gtk::MOVEMENT_PARAGRAPH_ENDS;
    const mvtPages            = Gtk::MOVEMENT_PAGES;
    const mvtBufferEnds       = Gtk::MOVEMENT_BUFFER_ENDS;
    const mvtHorizontalPages  = Gtk::MOVEMENT_HORIZONTAL_PAGES;
}

abstract class TObjectFlags
{
    const obfInDestruction = Gtk::IN_DESTRUCTION;
    const obfFloating      = Gtk::FLOATING;
    const obfReserved1     = Gtk::RESERVED_1;
    const obfReserved2     = Gtk::RESERVED_2;
}

abstract class TOrientation
{
    const oriHorizontal = Gtk::ORIENTATION_HORIZONTAL;
    const oriVertical   = Gtk::ORIENTATION_VERTICAL;
}

abstract class TObjectType
{
    const objInvalid   = Gobject::TYPE_INVALID;
    const objNone      = Gobject::TYPE_NONE;
    const objInterface = Gobject::TYPE_INTERFACE;
    const objChar      = Gobject::TYPE_CHAR;
    const objBoolean   = Gobject::TYPE_BOOLEAN;
    const objLong      = Gobject::TYPE_LONG;
    const objEnum      = Gobject::TYPE_ENUM;
    const objFlags     = Gobject::TYPE_FLAGS;
    const objDouble    = Gobject::TYPE_DOUBLE;
    const objString    = Gobject::TYPE_STRING;
    const objPointer   = Gobject::TYPE_POINTER;
    const objBoxed     = Gobject::TYPE_BOXED;
    const objParam     = Gobject::TYPE_PARAM;
    const objObject    = Gobject::TYPE_OBJECT;
    const objPHPValue  = Gobject::TYPE_PHP_VALUE;
}

abstract class TPackType
{
    const pckStart = Gtk::PACK_START;
    const pckEnd   = Gtk::PACK_END;
}

abstract class TPathPriorityType
{
    const pprLowest      = Gtk::PATH_PRIO_LOWEST;
    const pprGtk         = Gtk::PATH_PRIO_GTK;
    const pprApplication = Gtk::PATH_PRIO_APPLICATION;
    const pprTheme       = Gtk::PATH_PRIO_THEME;
    const pprRc          = Gtk::PATH_PRIO_RC;
    const pprHighest     = Gtk::PATH_PRIO_HIGHEST;
}

abstract class TPathType
{
    const pthWidget      = Gtk::PATH_WIDGET;
    const pthWidgetClass = Gtk::PATH_WIDGET_CLASS;
    const pthClass       = Gtk::PATH_CLASS;
}

abstract class TPolicyType
{
    const polAlways    = Gtk::POLICY_ALWAYS;
    const polAutomatic = Gtk::POLICY_AUTOMATIC;
    const polNever     = Gtk::POLICY_NEVER;
}

abstract class TPositionType
{
    const posLeft   = Gtk::POS_LEFT;
    const posRight  = Gtk::POS_RIGHT;
    const posTop    = Gtk::POS_TOP;
    const posBottom = Gtk::POS_BOTTOM;
}

abstract class TPreviewType
{
    const pvwColor     = Gtk::PREVIEW_COLOR;
    const pvwGrayscale = Gtk::PREVIEW_GRAYSCALE;
}

abstract class TProgressBarStyle
{
    const prgContinuous = Gtk::PROGRESS_CONTINUOUS;
    const prgDiscrete   = Gtk::PROGRESS_DISCRETE;
}

abstract class TProgressBarOrientation
{
    const prbLeftToRight = Gtk::PROGRESS_LEFT_TO_RIGHT;
    const prbRightToLeft = Gtk::PROGRESS_RIGHT_TO_LEFT;
    const prbBottomToTop = Gtk::PROGRESS_BOTTOM_TO_TOP;
    const prbTopToBottom = Gtk::PROGRESS_TOP_TO_BOTTOM;
}

abstract class TRcFlags
{
    const rcFg   = Gtk::RC_FG;
    const rcBg   = Gtk::RC_BG;
    const rcText = Gtk::RC_TEXT;
    const rcBase = Gtk::RC_BASE;
}

abstract class TRcTokenType
{
    const rcTokenInvalid      = Gtk::RC_TOKEN_INVALID;
    const rcTokenInclude      = Gtk::RC_TOKEN_INCLUDE;
    const rcTokenNormal       = Gtk::RC_TOKEN_NORMAL;
    const rctokenActive       = Gtk::RC_TOKEN_ACTIVE;
    const rcTokenPrelight     = Gtk::RC_TOKEN_PRELIGHT;
    const rcTokenSelected     = Gtk::RC_TOKEN_SELECTED;
    const rcTokenInsensitive  = Gtk::RC_TOKEN_INSENSITIVE;
    const rctokenFg           = Gtk::RC_TOKEN_FG;
    const rcTokenBg           = Gtk::RC_TOKEN_BG;
    const rcTokenText         = Gtk::RC_TOKEN_TEXT;
    const rcTokenBase         = Gtk::RC_TOKEN_BASE;
    const rcTokenXThickness   = Gtk::RC_TOKEN_XTHICKNESS;
    const rcTokenYThickness   = Gtk::RC_TOKEN_YTHICKNESS;
    const rcTokenFont         = Gtk::RC_TOKEN_FONT;
    const rcTokenFontSet      = Gtk::RC_TOKEN_FONTSET;
    const rcTokenFontName     = Gtk::RC_TOKEN_FONT_NAME;
    const rcTokenBgPixmap     = Gtk::RC_TOKEN_BG_PIXMAP;
    const rcTokenPixmapPath   = Gtk::RC_TOKEN_PIXMAP_PATH;
    const rcTokenStyle        = Gtk::RC_TOKEN_STYLE;
    const rcTokenBinding      = Gtk::RC_TOKEN_BINDING;
    const rcTokenBind         = Gtk::RC_TOKEN_BIND;
    const rcTokenWidget       = Gtk::RC_TOKEN_WIDGET;
    const rcTokenWidgetClass  = Gtk::RC_TOKEN_WIDGET_CLASS;
    const rcTokenClass        = Gtk::RC_TOKEN_CLASS;
    const rcTokenLowest       = Gtk::RC_TOKEN_LOWEST;
    const rcTokenGtk          = Gtk::RC_TOKEN_GTK;
    const rcTokenApplication  = Gtk::RC_TOKEN_APPLICATION;
    const rcTokenTheme        = Gtk::RC_TOKEN_THEME;
    const rcTokenRc           = Gtk::RC_TOKEN_RC;
    const rcTokenHighest      = Gtk::RC_TOKEN_HIGHEST;
    const rcTokenEngine       = Gtk::RC_TOKEN_ENGINE;
    const rcTokenModulePath   = Gtk::RC_TOKEN_MODULE_PATH;
    const rcTokenIMModulePath = Gtk::RC_TOKEN_IM_MODULE_PATH;
    const rcTokenIMModuleFile = Gtk::RC_TOKEN_IM_MODULE_FILE;
    const rcTokenStock        = Gtk::RC_TOKEN_STOCK;
    const rcTokenLtr          = Gtk::RC_TOKEN_LTR;
    const rcTokenRtl          = Gtk::RC_TOKEN_RTL;
    const rcTokenLast         = Gtk::RC_TOKEN_LAST;
    const rcStyle             = Gtk::RC_STYLE;
}

abstract class TReliefStyle
{
    const relNormal = Gtk::RELIEF_NORMAL;
    const relHalf   = Gtk::RELIEF_HALF;
    const relNone   = Gtk::RELIEF_NONE;
}

abstract class TResizeMode
{
    const rszParent    = Gtk::RESIZE_PARENT;
    const rszQueue     = Gtk::RESIZE_QUEUE;
    const rszImmediate = Gtk::RESIZE_IMMEDIATE;
}

abstract class TResponseType
{
    const resHelp        = Gtk::RESPONSE_HELP;
    const resApply       = Gtk::RESPONSE_APPLY;
    const resNo          = Gtk::RESPONSE_NO;
    const resYes         = Gtk::RESPONSE_YES;
    const resClose       = Gtk::RESPONSE_CLOSE;
    const resCancel      = Gtk::RESPONSE_CANCEL;
    const resOk          = Gtk::RESPONSE_OK;
    const resDeleteEvent = Gtk::RESPONSE_DELETE_EVENT;
    const resAccept      = Gtk::RESPONSE_ACCEPT;
    const resReject      = Gtk::RESPONSE_REJECT;
    const resNone        = Gtk::RESPONSE_NONE;
}

abstract class TScrollType
{
    const scrNone         = Gtk::SCROLL_NONE;
    const scrJump         = Gtk::SCROLL_JUMP;
    const scrStepBackward = Gtk::SCROLL_STEP_BACKWARD;
    const scrStepForward  = Gtk::SCROLL_STEP_FORWARD;
    const scrPageBackward = Gtk::SCROLL_PAGE_BACKWARD;
    const scrPageForward  = Gtk::SCROLL_PAGE_FORWARD;
    const scrStepUp       = Gtk::SCROLL_STEP_UP;
    const scrStepDown     = Gtk::SCROLL_STEP_DOWN;
    const scrPageUp       = Gtk::SCROLL_PAGE_UP;
    const scrPageDown     = Gtk::SCROLL_PAGE_DOWN;
    const scrStepLeft     = Gtk::SCROLL_STEP_LEFT;
    const scrStepRight    = Gtk::SCROLL_STEP_RIGHT;
    const scrpageLeft     = Gtk::SCROLL_PAGE_LEFT;
    const scrPageRight    = Gtk::SCROLL_PAGE_RIGHT;
    const scrStart        = Gtk::SCROLL_START;
    const scrEnd          = Gtk::SCROLL_END;
}

abstract class TSelectionMode
{
    const selNone     = Gtk::SELECTION_NONE;
    const selSingle   = Gtk::SELECTION_SINGLE;
    const selBrowse   = Gtk::SELECTION_BROWSE;
    const selMultiple = Gtk::SELECTION_MULTIPLE;
}

abstract class TShadowType
{
    const shaNone      = Gtk::SHADOW_NONE;
    const shaIn        = Gtk::SHADOW_IN;
    const shaOut       = Gtk::SHADOW_OUT;
    const shaEtchedIn  = Gtk::SHADOW_ETCHED_IN;
    const shaEtchedOut = Gtk::SHADOW_ETCHED_OUT;
}

abstract class TSideType
{
    const sidTop    = Gtk::SIDE_TOP;
    const sidBottom = Gtk::SIDE_BOTTOM;
    const sidLeft   = Gtk::SIDE_LEFT;
    const sidRight  = Gtk::SIDE_RIGHT;
}

abstract class TSideGroupMode
{
    const sigNone       = Gtk::SIZE_GROUP_NONE;
    const sigHorizontal = Gtk::SIZE_GROUP_HORIZONTAL;
    const sigVertical   = Gtk::SIZE_GROUP_VERTICAL;
    const sigBoth       = Gtk::SIZE_GROUP_BOTH;
}

abstract class TSortType
{
    const srtAscending  = Gtk::SORT_ASCENDING;
    const srtDescending = Gtk::SORT_DESCENDING;
}

abstract class TSpinType
{
    const spnStepForward  = Gtk::SPIN_STEP_FORWARD;
    const spnStepBackward = Gtk::SPIN_STEP_BACKWARD;
    const spnPageForward  = Gtk::SPIN_PAGE_FORWARD;
    const spnPageBackward = Gtk::SPIN_PAGE_BACKWARD;
    const spnHome         = Gtk::SPIN_HOME;
    const spnEnd          = Gtk::SPIN_END;
    const spnUserDefined  = Gtk::SPIN_USER_DEFINED;
}

abstract class TStateType
{
    const sttNormal      = Gtk::STATE_NORMAL;
    const sttActive      = Gtk::STATE_ACTIVE;
    const sttPrelight    = Gtk::STATE_PRELIGHT;
    const sttSelected    = Gtk::STATE_SELECTED;
    const sttInsensitive = Gtk::STATE_INSENSITIVE;
}

abstract class TStockItems
{
    const siAbout                = Gtk::STOCK_ABOUT;
    const siAdd                  = Gtk::STOCK_ADD;
    const siApply                = Gtk::STOCK_APPLY;
    const siBold                 = Gtk::STOCK_BOLD;
    const siCancel               = Gtk::STOCK_CANCEL;
    const siCdrom                = Gtk::STOCK_CDROM;
    const siClear                = Gtk::STOCK_CLEAR;
    const siClose                = Gtk::STOCK_CLOSE;
    const siColorPicker          = Gtk::STOCK_COLOR_PICKER;
    const siConnect              = Gtk::STOCK_CONNECT;
    const siConvert              = Gtk::STOCK_CONVERT;
    const siCopy                 = Gtk::STOCK_COPY;
    const siCut                  = Gtk::STOCK_CUT;
    const siDelete               = Gtk::STOCK_DELETE;
    const siDialogAuthentication = Gtk::STOCK_DIALOG_AUTHENTICATION;
    const siDialogError          = Gtk::STOCK_DIALOG_ERROR;
    const siDialogInfo           = Gtk::STOCK_DIALOG_INFO;
    const siDialogQuestion       = Gtk::STOCK_DIALOG_QUESTION;
    const siDialogWarning        = Gtk::STOCK_DIALOG_WARNING;
    const siDirectory            = Gtk::STOCK_DIRECTORY;
    const siDisconnect           = Gtk::STOCK_DISCONNECT;
    const siDnd                  = Gtk::STOCK_DND;
    const siDndMultiple          = Gtk::STOCK_DND_MULTIPLE;
    const siEdit                 = Gtk::STOCK_EDIT;
    const siExecute              = Gtk::STOCK_EXECUTE;
    const siFile                 = Gtk::STOCK_FILE;
    const siFind                 = Gtk::STOCK_FIND;
    const siFindAndreplace       = Gtk::STOCK_FIND_AND_REPLACE;
    const siFloppy               = Gtk::STOCK_FLOPPY;
    const siGoBack               = Gtk::STOCK_GO_BACK;
    const siGoDown               = Gtk::STOCK_GO_DOWN;
    const siGoForward            = Gtk::STOCK_GO_FORWARD;
    const siGoUp                 = Gtk::STOCK_GO_UP;
    const siGotoBottom           = Gtk::STOCK_GOTO_BOTTOM;
    const siGotoFirst            = Gtk::STOCK_GOTO_FIRST;
    const siGotoLast             = Gtk::STOCK_GOTO_LAST;
    const siGotoTop              = Gtk::STOCK_GOTO_TOP;
    const siHarddisk             = Gtk::STOCK_HARDDISK;
    const siHelp                 = Gtk::STOCK_HELP;
    const siHome                 = Gtk::STOCK_HOME;
    const siIndent               = Gtk::STOCK_INDENT;
    const siIndex                = Gtk::STOCK_INDEX;
    const siItalic               = Gtk::STOCK_ITALIC;
    const siJumpTo               = Gtk::STOCK_JUMP_TO;
    const siJustifyCenter        = Gtk::STOCK_JUSTIFY_CENTER;
    const siJustifyFill          = Gtk::STOCK_JUSTIFY_FILL;
    const siJustifyLeft          = Gtk::STOCK_JUSTIFY_LEFT;
    const siJustifyRight         = Gtk::STOCK_JUSTIFY_RIGHT;
    const siMediaForward         = Gtk::STOCK_MEDIA_FORWARD;
    const siMediaNext            = Gtk::STOCK_MEDIA_NEXT;
    const siMediaPause           = Gtk::STOCK_MEDIA_PAUSE;
    const siMediaPlay            = Gtk::STOCK_MEDIA_PLAY;
    const siMediaPrevious        = Gtk::STOCK_MEDIA_PREVIOUS;
    const siMediaRecord          = Gtk::STOCK_MEDIA_RECORD;
    const siMediaRewind          = Gtk::STOCK_MEDIA_REWIND;
    const siMediaStop            = Gtk::STOCK_MEDIA_STOP;
    const siMissingImage         = Gtk::STOCK_MISSING_IMAGE;
    const siNetwork              = Gtk::STOCK_NETWORK;
    const siNew                  = Gtk::STOCK_NEW;
    const siNo                   = Gtk::STOCK_NO;
    const siOk                   = Gtk::STOCK_OK;
    const siOpen                 = Gtk::STOCK_OPEN;
    const siPaste                = Gtk::STOCK_PASTE;
    const siPreferences          = Gtk::STOCK_PREFERENCES;
    const siPrint                = Gtk::STOCK_PRINT;
    const siPrintPreview         = Gtk::STOCK_PRINT_PREVIEW;
    const siProperties           = Gtk::STOCK_PROPERTIES;
    const siQuit                 = Gtk::STOCK_QUIT;
    const siRedo                 = Gtk::STOCK_REDO;
    const siRefresh              = Gtk::STOCK_REFRESH;
    const siRemove               = Gtk::STOCK_REMOVE;
    const siRevertTosaved        = Gtk::STOCK_REVERT_TO_SAVED;
    const siSave                 = Gtk::STOCK_SAVE;
    const siSaveAs               = Gtk::STOCK_SAVE_AS;
    const siSelectColor          = Gtk::STOCK_SELECT_COLOR;
    const siSelectFont           = Gtk::STOCK_SELECT_FONT;
    const siSortAscending        = Gtk::STOCK_SORT_ASCENDING;
    const siSortDescending       = Gtk::STOCK_SORT_DESCENDING;
    const siSpellCheck           = Gtk::STOCK_SPELL_CHECK;
    const siStop                 = Gtk::STOCK_STOP;
    const siStrikethrough        = Gtk::STOCK_STRIKETHROUGH;
    const siUndelete             = Gtk::STOCK_UNDELETE;
    const siUnderline            = Gtk::STOCK_UNDERLINE;
    const siUndo                 = Gtk::STOCK_UNDO;
    const siUnindent             = Gtk::STOCK_UNINDENT;
    const siYes                  = Gtk::STOCK_YES;
    const siZoom100              = Gtk::STOCK_ZOOM_100;
    const siZoomFit              = Gtk::STOCK_ZOOM_FIT;
    const siZoomIn               = Gtk::STOCK_ZOOM_IN;
    const siZoomOut              = Gtk::STOCK_ZOOM_OUT;
}

abstract class TSubmenuDirection
{
    const smdLeft  = Gtk::DIRECTION_LEFT;
    const smdRight = Gtk::DIRECTION_RIGHT;
}

abstract class TSubmenuPlacement
{
    const smpBottom = Gtk::TOP_BOTTOM;
    const smpRight  = Gtk::LEFT_RIGHT;
}

abstract class TTargetFlags
{
    const tgtSameApp = Gtk::TARGET_SAME_APP;
    const tgtWidget  = Gtk::TARGET_SAME_WIDGET;
}

abstract class TTextWindowType
{
    const txtWindowPrivate     = Gtk::TEXT_WINDOW_PRIVATE;
    const txtSearchVisibleOnly = Gtk::TEXT_SEARCH_VISIBLE_ONLY;
    const txtSearchTextOnly    = Gtk::TEXT_SEARCH_TEXT_ONLY;
    const txtWindowLeft        = Gtk::TEXT_WINDOW_LEFT;
    const txtWindowRight       = Gtk::TEXT_WINDOW_RIGHT;
    const txtWindowTop         = Gtk::TEXT_WINDOW_TOP;
    const txtWindowBottom      = Gtk::TEXT_WINDOW_BOTTOM;
}

abstract class TToolbarStyle
{
    const tbrIcons     = Gtk::TOOLBAR_ICONS;
    const tbrText      = Gtk::TOOLBAR_TEXT;
    const tbrBoth      = Gtk::TOOLBAR_BOTH;
    const tbrBothHoriz = Gtk::TOOLBAR_BOTH_HORIZ;
}

abstract class TTreeModelFlags
{
    const trmItersPersist = Gtk::TREE_MODEL_ITERS_PERSIST;
    const trmListOnly     = Gtk::TREE_MODEL_LIST_ONLY;
}

abstract class TTreeViewColumnAttributes
{
    const tvcText   = 'text';
    const tvcPixbuf = 'pixbuf';
    const tvcActive = 'active';
    const tvcValue  = 'value';
}

abstract class TTreeViewColumnSizing
{
    const tvcGrowOnly = Gtk::TREE_VIEW_COLUMN_GROW_ONLY;
    const tvcAutosize = Gtk::TREE_VIEW_COLUMN_AUTOSIZE;
    const tvcFixed    = Gtk::TREE_VIEW_COLUMN_FIXED;
}

abstract class TTreeViewColumnMode
{
    const tvcLine = Gtk::TREE_VIEW_LINE;
    const tvcItem = Gtk::TREE_VIEW_ITEM;
}

abstract class TTreeViewDropPosition
{
    const tvdBefore       = Gtk::TREE_VIEW_DROP_BEFORE;
    const tvdAfter        = Gtk::TREE_VIEW_DROP_AFTER;
    const tvdIntoOrBefore = Gtk::TREE_VIEW_DROP_INTO_OR_BEFORE;
    const tvdIntoOrAfter  = Gtk::TREE_VIEW_DROP_INTO_OR_AFTER;
}

abstract class TTreeViewGridLines
{
    const tvglNone       = Gtk::TREE_VIEW_GRID_LINES_NONE;
    const tvglHorizontal = Gtk::TREE_VIEW_GRID_LINES_HORIZONTAL;
    const tvglVertical   = Gtk::TREE_VIEW_GRID_LINES_VERTICAL;
    const tvglBoth       = Gtk::TREE_VIEW_GRID_LINES_BOTH;
}

abstract class TUIManagerItemType
{
    const uimAuto        = Gtk::UI_MANAGER_AUTO;
    const uimMenubar     = Gtk::UI_MANAGER_MENUBAR;
    const uimMenu        = Gtk::UI_MANAGER_MENU;
    const uimToolbar     = Gtk::UI_MANAGER_TOOLBAR;
    const uimPlaceHolder = Gtk::UI_MANAGER_PLACEHOLDER;
    const uimPopup       = Gtk::UI_MANAGER_POPUP;
    const uimMenuItem    = Gtk::UI_MANAGER_MENUITEM;
    const uimToolItem    = Gtk::UI_MANAGER_TOOLITEM;
    const uimSeparator   = Gtk::UI_MANAGER_SEPARATOR;
    const uimAccelerator = Gtk::UI_MANAGER_ACCELERATOR;
}

abstract class TUpdateType
{
    const updContinuous   = Gtk::UPDATE_CONTINUOUS;
    const updDiscontinuos = Gtk::UPDATE_DISCONTINUOUS;
    const updDelayed      = Gtk::UPDATE_DELAYED;
}

abstract class TVisiblity
{
    const visNone    = Gtk::VISIBILITY_NONE;
    const visPartial = Gtk::VISIBILITY_PARTIAL;
    const visFull    = Gtk::VISIBILITY_FULL;
}

abstract class TWidgetHelpType
{
    const whlTooltip   = Gtk::WIDGET_HELP_TOOLTIP;
    const whlWhatsThis = Gtk::WIDGET_HELP_WHATS_THIS;
}

abstract class TWindowPosition
{
    const wpsNone           = Gtk::WIN_POS_NONE;
    const wpsCenter         = Gtk::WIN_POS_CENTER;
    const wpsPosMouse       = Gtk::WIN_POS_MOUSE;
    const wpsCenterAlways   = Gtk::WIN_POS_CENTER_ALWAYS;
    const wpsCenterOnParent = Gtk::WIN_POS_CENTER_ON_PARENT;
}

abstract class TWindowType
{
    const wndToplevel = Gtk::WINDOW_TOPLEVEL;
    const wndPopup    = Gtk::WINDOW_POPUP;
}

abstract class TWrapMode
{
    const wrpNone     = Gtk::WRAP_NONE;
    const wrpChar     = Gtk::WRAP_CHAR;
    const wrpWord     = Gtk::WRAP_WORD;
    const wrpWordChar = Gtk::WRAP_WORD_CHAR;
}

