// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.
// tslint:disable:max-classes-per-file
import Message from 'models/chat/message';
import DispatcherAction from './dispatcher-action';

export class ChatMessageSendAction implements DispatcherAction {
  constructor(public message: Message) {
  }
}
