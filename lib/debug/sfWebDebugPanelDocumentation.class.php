<?php
// lib/debug/sfWebDebugPanelDocumentation.class.php
class acWebDebugPanelDocumentation extends sfWebDebugPanel
{
  public function getTitle()
  {
    return '<img src="/legacy/images/documentation.png" alt="Documentation Shortcuts" height="16" width="16" /> docs';
  }

  public function getPanelTitle()
  {
    return 'Documentation';
  }

  public function getPanelContent()
  {
    $content = 'Placeholder Panel Content';

    return $content;
  }

  public static function listenToLoadDebugWebPanelEvent(sfEvent $event)
  {
    $event->getSubject()->setPanel(
      'documentation',
      new self($event->getSubject())
    );
  }
}
