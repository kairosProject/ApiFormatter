# ApiFormatter

The API response formatter component for the Kairos API project part.

## 1)  Subject

The formatter part of the API is in charge of the response creation. It handles the data preformatted by the other parts and inserts them in a specific format inside a PSR response.

The component will use the event dispatching methodology to perform a set of response building logic, such as data formatting, header resolution and so on.

## 2) Class architecture

The formatter will provide a base class to perform the build logic.

Three additional components are designed to provide a logic footprint of the feature. These components are:

 * ResponseFactory: used to create a new response instance
 * BodyFormatter: used to perform the main body formatting
 * HeaderFormatter: used to produce the header assignment

## 3) Dependency description and use into the element

A the time of writing, the formatter is designed to have three production dependencies as:

 * psr/log
 * symfony/event-dispatcher
 * kairos-project/api-controller

### 3.1) psr/log

The debugging and error retracement in each project parts is currently a fundamental law in development and it's missing is part of the OWASP top ten threats.

As defined by the third PHP standard reference, the logger components have to implement a specific interface. By the way, the logging system will be usable by each existing frameworks.

### 3.2) symfony/event-dispatcher

The formatting system is designed to be easily extendable and will implement an event dispatching system, allowing the attachment and separation of logic by priority.

### 3.3) kairos-project/api-controller

The API formatter is made to be used by APIs and the generic system into kairos project is the API controller. This system offer access to specialized workflow events.

The formatter will define the controller component as a dependency to make use of the workflow events.

## 4) Implementation specification

The API formatter class itself will provide a response creation workflow. This workflow will consist of a chain of events, each one responsible for a specific creation and formatting part.

The first fired event is the response creation. It will return a response instance in a specific event, realizing the PHP standard recommendation number 7.

The second event is the body formatting. By encoding the initial process response data, this component will create the response body itself, in the expected format.

The third event is the header formatter. This step is used to provide the expected headers, such as content type or content length.

#### 4.1) Dependency injection specification

The API formatter will receive an instance of event dispatcher as part of the constructor arguments, and a logger instance. The event dispatcher element will be used to dispatch the three events of the formatter. The logger will be used to trace the formatter workflow.

#### 4.2) format method algorithm

The format method is in charge of the dispatching for each of the formatting events.

```PHP
We assume to receive the response event from the parameters.

Dispatch the "create response" event.
Dispatch the "format body" event.
Dispatch the "process header" event.
```
