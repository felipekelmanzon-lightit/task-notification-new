<?php

declare(strict_types=1);

namespace src\Backoffice\Employee\App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use src\Backoffice\Task\Domain\Models\Task;

class TaskAssignmentNotification extends Notification implements ShouldQueue
{
    use Queueable;

    public function __construct(private Task $task, private bool $isReassigned = false)
    {
    }

    /**
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage())
                    ->subject($this->isReassigned ? 'Task Reassigned' : 'New Task Assigned')
                    ->from('example@lightit.com', 'Lightit')
                    ->view('mail.assigned-task', [
                        'task' => $this->task,
                        'isReassigned' => $this->isReassigned,
                    ]);
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            
        ];
    }
}
